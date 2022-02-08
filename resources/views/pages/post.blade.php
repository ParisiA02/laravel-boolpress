@extends('layouts.main-layout')
@section('content')
    @auth
    <h1>{{ Auth::user() -> name }}</h1>
    <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
    <a class="btn btn-primary" href="{{route('create')}}">Create</a>
    @else
        <br>
        Effettua il login per creare dei post - <a href="{{route('home')}}">Login/Register</a>
    @endif
    <h1>POST</h1> 
    @foreach ($posts as $post)

        <h3>{{$post -> title}} - Author: {{$post -> author}}</h3>
        realease date: {{$post -> date}}<br><br>
        
            @foreach ($post -> tags as $tag)
                Tag: {{$tag -> name}} |
            @endforeach
    @endforeach
@endsection