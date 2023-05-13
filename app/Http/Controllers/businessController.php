<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class businessController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('services');
    }
   
    public function contactForm(Request $request){
        
        return view('contact', ['data' => $request]);
    }
}
