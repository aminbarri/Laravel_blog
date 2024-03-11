<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PagesConlroller extends Controller
{
    public function index(){
        return view('index')
       ->with( 'lastInserted' , Post::latest()->first())
       ->with('user',Auth::user())
      ;
    }
    public function register(){
        return view('register');
    }
    public function signin(){
        return view('signin');
    }
}