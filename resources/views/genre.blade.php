<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/css/header.css')}}">
    <link rel="stylesheet" href="{{url('/css/home.css')}}">
    <title>BeeFlix</title>
</head>
<body>
    @include('header')

    <div>
        <h2>DRAMA</h2>
        
    </div>
    <div class="row-cont">
        @foreach ($movie as $m)
        <div class="card">
            <img src="{{ url('/assets/'.$m->photo) }}" alt="">
            <div class="movie-title">{{$m->title}}</div>
            <a href="{{url('/movie/'.$m->id)}}" class="movie-button">Details</a>
        </div>
        @endforeach
    </div>
</body>
</html>