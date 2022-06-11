<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
class ZipController extends Controller
{
    
   
    function zipUploadForm(Request $request){
         
        return view("unzip");
    }
    function extractUploadedZip(Request $request){
         
        $zip = new ZipArchive();
        $status = $zip->open($request->file("zip")->getRealPath());
        if ($status !== true) {
         throw new \Exception($status);
        }
        else{
            $storageDestinationPath= storage_path("app/uploads/unzip/");
       
            if (!\File::exists( $storageDestinationPath)) {
                \File::makeDirectory($storageDestinationPath, 0755, true);
            }
            $zip->extractTo($storageDestinationPath);
            $zip->close();
            return back()
             ->with('success','You have successfully extracted zip.');
        }
    }

}