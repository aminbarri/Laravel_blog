<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <link href="resources\css\bootstrap.min.css" rel="stylesheet"  >
    <link rel="stylesheet" href="resources\css\style.css">
    <style>
      
    </style>
</head>
<body>
    <div>
    <div class="navbar navbar-expand-lg ">
        <div class="container">
        <div class="container-fluid">
            <a href="#"  class=" logo nav-item">My Site</a>
            <a href="#" class="nav-item login">Sign In</a>
            <a href="#" class="nav-item login">Sign Up</a>
        </div>
        </div>
        
        
    </div>
    <div>

        
        @yield('content')
    </div>

    <div>
      
        @include('layouts.footer')
    </div>
</div>
</body>
</html>