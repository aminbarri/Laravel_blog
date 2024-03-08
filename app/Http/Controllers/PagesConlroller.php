<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesConlroller extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
    public function signin(){
        return view('signin');
    }
}