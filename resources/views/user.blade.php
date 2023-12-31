@extends('layout.main')



@section('title')
    User
@endsection

@section('section')

<div class="container">
<h1 class="text-center">Users</h1>

<table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>City</th>
            <th>Created At</th>
         
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            
        <tr>
            <td>{{$user->reg_id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->created_at}}</td>
           
            <td>
                <a href="edit/{{$user->reg_id}}" class="btn btn-warning">Edit</a>
                <a href="delete/{{$user->reg_id}}" class="btn btn-danger">Trash</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="container">
    {{$users->links()}}
</div>

@endsection