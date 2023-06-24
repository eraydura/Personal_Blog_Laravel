<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class contact extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(){

        $contact = new Contacts();

        $contact->Name = request('firstname');
        $contact->Email = request('email');
        $contact->Content = request('subject');
    
        $contact->save();

        return redirect('/contact')->with('mssg', 'Thanks for your message!');
    }
}
