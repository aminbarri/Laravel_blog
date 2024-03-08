@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6 rounded border">
        <h2 class="mb-4">Register</h2>
        <form method="POST" action="{{ route('store') }}">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" >
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" >
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" >
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" >
          </div>
          <button type="submit" name="submit" class="btn btn-primary my-2">Register</button>
        </form>
        <h6>Already have an acoount? <a href="/signin">sign in</a> </h6>
      </div>
    </div>
  </div>
@endsection