@extends('layouts.app')
@section('content')
<div>

    <!-- slide -->
    <div class="main_content">
        
        <h3 class="welcome text-uppercase">Welcome to my blog</h3>
        <a  class='start_reading text-uppercase' href="#startreading">start reading</a>
    </div>

     <!-- articles -->

    <div class=" second_section row m-0 mt-5 mb-5 m-md-3" id="startreading">
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

     <!-- categories-->

     <div class="text-center bg-primary-subtle">
        <h2>blog categories</h2>
        <div class="container d-flex align-items-center pt-10 justify-content-center flex-wrap">
            <div class="col fw-bold pb-2 pt-2">first categories  </div>
            <div class="col fw-bold pb-2 pt-2">second categories </div>
            <div class="col fw-bold pb-2 pt-2">third categories  </div>
            <div class="col fw-bold pb-2 pt-2">forth categories  </div>
        </div>
     </div>
     <!-- categories-->
     <div class="container text-center ">
        <h3>Recent posts</h3>
        <p class="px-3">With this setup, the content will be centered horizontally within the screen while maintaining its width. Adjust the styling and content as needed to fit your layout requirements.</p>
        
     </div>
     <div class="container">
     <div class="d-flex  row  m-0">
            <div class="d-flex bg-warning m-0  col-sm-6 ">
                <div class="d-block m-auto  pt-2 pb-5 ">
                    <ul class="row mr-0 col-sm-12 d-flex px-2  justify-content-between list-unstyled">
                        <li class="col-sm-auto my-2 hover-bg  rounded"><a href="/" class="text-decoration-none ">PHP</a></li>
                        <li class="col-sm-auto my-2 hover-bg  rounded"><a href="/" class="text-decoration-none ">PROGRAMING</a></li>
                        <li class="col-sm-auto my-2 hover-bg  rounded"><a href="/" class="text-decoration-none ">BACKEND</a></li>
                        <li class="col-sm-auto my-2 hover-bg  rounded"><a href="/" class="text-decoration-none ">LANGUAGE</a></li>


                    </ul>
                    <p class="py-5">
                        Responsive Classes: Bootstrap offers responsive classes to control the layout at different breakpoints. 
                        For example, you can use col-sm-* for small screens, col-md-*
                         for medium screens, col-lg-* for large screens, and col-xl-* for extra-large screens.
                    </p>
                    <a href="\" class="bg-transparent border px-3 py-2 border-primary-subtle rounded-2 text-decoration-none text-dark">READ MORE</a>
                </div>
            </div>
            <div class="d-flex m-0 col-sm-6">
                <img class="picz" src="https://picsum.photos/id/237/200/300" alt="">
            </div>
     </div>
    </div>

</div>
@endsection