
@extends('layouts.app')
@section('content')

        <div class="container  text-center pt-5 pb-3">
          
         <h3 class="">Add new post</h3>
        </div>
        <div class="container  text-center pt-5 pb-3">

            <form method="POST" action="/blog" enctype="multipart/form-data">
                @csrf
                <div class="form-group py-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                </div>
                <div class="form-group py-2">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter description" required></textarea>
                </div>
                <div class="form-group py-2">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary py-2">Submit</button>
            </form>
        </div>

@endsection