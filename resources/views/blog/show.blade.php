@extends('layouts.app')
@section('content')
        <div class="container  text-center pt-5 pb-3">
          {{session()->get('message')}}
       
            <h3 class="">
                @if($post->title)
                    {{ $post->title }}
                @endif
            </h3>
            
         <div class="mt-2">
            By: <span>{{$post ->user->name}}</span>
         On <span>{{ date('d-m-Y', strtotime( $post ->created_at)) }} </span>
         </div>
         
        </div>

       <div class="container">
                <img src="{{ asset('img/'.$post->image_path) }}" style="height: 50vh; width:100%;" alt="" class="">
            
        <div class="  text-center pt-5 pb-3">
            
          
        {{ $post->description}}
        </div>
        <div class="my-5 d-flex">
        @if (Auth::check() && Auth::user()->id == $post->user_id)

        <a  class='start_reading text-uppercase mx-5 bg-success' href="{{$post->slug}} /edit">edit Article</a>
        <form action="{{$post->slug}}" method="post">
            @csrf 
            @method('delete')
             <button class='start_reading text-uppercase border border-0 bg-danger'>Delete post</button>
                
        </form>
      

        @endif 
        </div>
       
        </div>
        
            
        
@endsection