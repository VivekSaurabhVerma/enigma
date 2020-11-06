@extends('levels.layout')

@section('content')
@if (count($users)>0)
    <form class="row" action="/search" method="POST" role="search">
        @csrf
        <input type="text" class="form-control col-md-10" name="query" placeholder="Search users">
        <input class="btn btn-primary col-md-2" type="submit">
    </form>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td><a href="/users/{{$user->id}}" style="text-decoration: none">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->level}}</td>
            @if ($user->blocked_at)
            <td><a href="/allow/{{$user->id}}" class="btn btn-secondary">Allow</a></td>
            @else
            <td><a href="/ban/{{$user->id}}" class="btn btn-danger">Ban</a></td>    
            @endif
            
        </tr>    
        @endforeach
        </tbody>
    </table>    
@else
    <h2>No user found!</h2>    
@endif


@endsection