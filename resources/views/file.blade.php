@extends('layout.main')

@section('title')
    Home
@endsection

@section('section')

<div class="container">
    <form action="/file" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="image" id="" class="form-control">
    <input type="submit" value="Upload" class="btn btn-dark">
</form>
</div>
  

  @endsection