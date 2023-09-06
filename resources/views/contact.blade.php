@extends('layout.main')

@section('title')
    Contact
@endsection

@section('section')

<div class="container my-3">
  {{-- <pre>
    {{print_r($user)}}
  </pre> --}}
  <h1 class="text-center">{{$title}} Record</h1>
    <form class="row g-3" method="post" action="{{$url}}">

        {{-- token - hmesha form handle krne k lye use krte hen --}}
        @csrf

        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Full name</label>
          <input type="text" class="form-control" name="name" id="validationDefault01" value="{{old('name')}}{{@$user->name}}" >
          <span class="text-danger"> 
            @error('name')
            {{$message}}
                
            @enderror</span>
        </div>
       
     
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control" name="username" value="{{old('username')}}{{@$user->username}}" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" >
          </div>
          <span class="text-danger"> 
            @error('username')
            {{$message}}
                
            @enderror</span>
        </div>
        <div class="col-md-4">
          <label for="validationDefault03" class="form-label">City</label>
          <input type="text" class="form-control" name="city" value="{{old('city')}}{{@$user->city}}" id="validationDefault03" >
          <span class="text-danger"> 
            @error('city')
            {{$message}}
                
            @enderror</span>
        </div>

        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" value="{{old('email')}}{{@$user->email}}" id="validationDefault03" >
          <span class="text-danger"> 
            @error('email')
            {{$message}}
                
            @enderror</span>
        </div>
        @if ($title == 'Add')
            
      
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="validationDefault05" >
          <span class="text-danger"> 
            @error('password')
            {{$message}}
                
            @enderror</span>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" id="validationDefault05" >
          <span class="text-danger"> 
            @error('confirm_password')
            {{$message}}
                
            @enderror</span>
        </div>
        @endif
        <div class="col-12 d-flex justify-content-center">
          <button class="btn btn-dark" type="submit">{{$title}}</button>
        </div>
      </form>
</div>
  @endsection