@extends('layouts.main-layout')
@section('content')
    <h1> Create new Post </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('storePost')}}" method="POST">
        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title">

        <label for="content"> Text: </label>
        <input type="text" name="content" placeholder="content">

        <label for="subtitle"> Subtitle: </label>
        <input type="subtitle" name="subtitle" placeholder="subtitle">

        <label for="date">Releade date:</label>
        <input type="date" name="date">

        <label for="category">Category: </label>
        <select name="category_id">
            @foreach ($categories as $category)   

                <option value="{{$category -> id}}">{{$category -> name}}</option>

            @endforeach
        </select>
        <input type="submit" value="CREATE">
    </form>
@endsection