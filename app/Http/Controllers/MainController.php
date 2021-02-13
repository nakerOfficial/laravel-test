<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
   
    public function review() {
        $reviews = new ContactModel();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request) {
        // dd($request); // отобразить в браузере (debug)
        $valid = $request -> validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:10|max:500'
        ]);
    
        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect('/review');
    }
}
