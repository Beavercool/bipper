<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use ZipArchive;

function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir."/".$object) == "dir") {
                    rrmdir($dir."/".$object);
                    rmdir($dir."/".$object);
                }
            else unlink($dir."/".$object);
            }
        }
        reset($objects);
    }
}

function getFilesList($dir) {
    $files = scandir($dir);
    $files = array_diff(scandir($dir), array('.', '..'));

    $ans = [];

    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir."/".$object) == "dir") 
                    array_merge($ans, getFilesList($dir."/".$object)); 
                else $ans[] = $object;
            }
        }
        reset($objects);
    }
    return $ans;
}

class ZipController extends Controller
{
    public function download($file){
        return response()->download(storage_path('app/uploads/unzip/'.$file));
    }

    function getFile($file){
        return Storage::download("app/uploads/unzip/" . $file);
    }
    function zipUploadForm(Request $request){
         
        return view("unzip");
    }
    function extractUploadedZip(Request $request){
        rrmdir(storage_path("app/uploads/unzip/"));
        $zip = new ZipArchive();
        $status = $zip->open($request->file("zip")->getRealPath());
        if ($status !== true) {
         throw new \Exception($status);
        }
        else{
            rrmdir("app/uploads/unzip/");
            $storageDestinationPath= storage_path("app/uploads/unzip/");
       
            if (!Storage::exists( $storageDestinationPath)) {
                 Storage::makeDirectory($storageDestinationPath, 0755, true);
            }
            $zip->extractTo($storageDestinationPath);
            $zip->close();

            
            $files = getFilesList($storageDestinationPath);
            

            return back()
             ->with('success', $files);
        }
    }
}