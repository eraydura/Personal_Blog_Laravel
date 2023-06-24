<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogs extends Controller
{
    public function index(){
        return view('blogs');
    }

    public function show($id){
        return view('detail',['id' => $id]);
    }
}
