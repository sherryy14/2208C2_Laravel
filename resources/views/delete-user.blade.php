@extends('layout.main')



@section('title')
    User
@endsection

@section('section')

<div class="container">
<h1 class="text-center">Trashed Users</h1>

<table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>City</th>
            <th>Deleted At</th>
         
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
            <td>{{$user->deleted_at}}</td>
           
            <td>
                <a href="restore/{{$user->reg_id}}" class="btn btn-success">Restore</a>
                <a href="force/{{$user->reg_id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

{{-- <pre>
    {{print_r($users)}}
</pre> --}}

@endsection