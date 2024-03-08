@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-4">Sign In</h2>
        <form method="post" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary my-2">Sign In</button>
        </form>
        <h6>you don't have an acoount? <a href="/register">Register</a> </h6>
      </div>
    </div>
  </div>
@endsection