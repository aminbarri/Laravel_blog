@extends('layouts.app')
@section('content')
        <div class="container  text-center pt-5 pb-3">
            {{session()->get('message')}}
         <h3 class="">All Posts</h3>
        </div>
        <div class="container my-5 border-bottom pb-5">
            @if (Auth::check())
                  <a  class='start_reading text-uppercase' href="/blog/create">Add Article</a>
        
            @endif
       </div>
        @foreach ($posts as $post)
            
        
        <div class="container my-5 border-bottom pb-5">
            <div class="row m-0 p-0 m-auto">
                <div class="col-sm-6 d-flex ">
                    <img class="image-cover" src="{{ asset('img/'.$post->image_path) }}" alt="">
                </div>
                <div class="col-sm-6">
                    <h3 class="py-2 pt-sm-0">{{$post ->title}}</h3>
                    <div>
                        By: <span>{{$post ->user->name}}</span>
                        On <span>{{ date('d-m-Y', strtotime( $post ->created_at)) }} </span>
                        <p class="py-3">
                            {{ Str::limit($post->description, 250) }}
                        </p>
                        <a href="blog/{{$post ->slug}}" class="bg-transparent border px-3 py-2 border-primary-subtle rounded-2 text-decoration-none text-dark">READ MORE</a>
                   
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
        
            
        </div>
@endsection