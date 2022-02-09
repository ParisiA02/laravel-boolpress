@extends('layouts.main-layout')
@section('content')
    <h1> Update Post </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('post.update', $post -> id)}}" method="POST">
        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{$post -> title}}">

        <label for="content"> Text: </label>
        <input type="text" name="content" placeholder="content" value="{{$post -> content}}">

        <label for="subtitle"> Subtitle: </label>
        <input type="subtitle" name="subtitle" placeholder="subtitle" value="{{$post -> subtitle}}">

        <label for="date">Releade date:</label>
        <input type="date" name="date" value="{{$post -> date}}">

        <label for="category">Category: </label>
        <select name="category_id">
            @foreach ($categories as $category)   

                <option value="{{$category -> id}}" 
                    
                    @if ($category -> id == $post -> category -> id)
                        selected
                    @endif
                    
                >{{$category -> name}}</option>

            @endforeach
        </select>
        <label for="tag">Tag: </label>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{$tag -> id}}"
            
                @foreach ($post -> tags as $postTag)
                
                    @if ($tag -> id == $postTag -> id)
                        checked
                    @endif

                @endforeach
            
            > {{$tag -> name}} 
        @endforeach
        <input type="submit" value="UPDATE">
    </form>
@endsection