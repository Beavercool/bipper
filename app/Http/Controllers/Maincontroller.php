<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

use function GuzzleHttp\Promise\all;

class MainController extends Controller
{
    public function home() 
    {
     return view('main');
    }
  
    public function about() 
  {
      return view('about');
  }
  
  public function review() 
  {
    $reviews = new Contact();
return view('review', ['reviews' => $reviews->all()]);
  }
  
  public function review_check(Request $request) 
  {
      $valid= $request->validate([
        'email' => 'required|min:4|max:100',
        'subject' => 'required|min:4|max:100',
        'message' => 'required|min:10|max:500',
      ]);

      $review = new Contact();
      $review->email = $request->input('email');
      $review->subject = $request->input('subject');
      $review->message = $request->input('message');

      $review->save();

      return redirect('/review');
  }

  public function contacts() 
    {
     return view('contacts');
    }

    public function pricing() 
    {
     return view('pricing');
    }
}
