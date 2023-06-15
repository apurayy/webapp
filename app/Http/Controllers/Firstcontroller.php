<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    function index_about(){
        return view('about');
    }

    function index_contact(){
        return view('contact');
    }

    function index_country(){
        return view('country');
    }

    public function store_contact(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:70',
            'email' => 'required|max:80',
            'password' => 'required|min:6|max:12',
        ]);

        dd($request->all());
    }
}
