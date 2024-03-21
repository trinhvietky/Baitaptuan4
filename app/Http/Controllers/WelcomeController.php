<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index () {
        return view ('welcome');
    }

    public function signup(){
        return view ('signup');
    }

    public function process(Request $request){
        return "Xin chao " . $request->firstName ." ". $request->surname;
    }
}
