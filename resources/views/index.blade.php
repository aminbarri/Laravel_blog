@extends('layouts.app')
@section('content')
<div>
    <div class="main_content">
        
        <h3 class="welcome text-uppercase">Welcome to my blog</h3>
        <a  class='start_reading text-uppercase' href="#startreading">start reading</a>
    </div>
    <div class="container second_section row m-0 mt-5 m-md-3" id="startreading">
        <div class="col-12 col-sm-6 img_art ">
            <img class="col-12 col-sm-6 border-radius-sm" src="https://picsum.photos/1024/1024" alt="">
        </div>
        <div class="col-12 col-sm-6 d-flex flex-column justify-content-start align-items-start align-self-center">
            <h3 class="p-2 p-sm-0">Change the gutters </h3>
            <p class="">Classes are built from the $gutters Sass map which is inherited from the $spacers Sass map.</p>
            

            <a href="/" class="bg-secondary rounded-1 p-2 text-body-emphasis text-decoration-none icon-link icon-link-hover">
            read more!</a>
        </div>
    </div>

</div>
@endsection