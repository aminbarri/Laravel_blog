<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesConlroller extends Controller
{
    public function index(){
        return view('index');
    }
}