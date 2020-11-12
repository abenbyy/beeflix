<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link rel="stylesheet" href="{{ url('/css/home.css') }}">
    <link rel="stylesheet" href="{{ url('/css/header.css') }}">
</head>
<body>
    @include('header')
    <div>
        <div>
            <h2>DRAMA</h2>
            <span><a href="{{ url('/genre/drama')}}">View All Dramas >></a></span>
        </div>
        <div class="row-cont">
            @foreach ($dramas as $d)
            <div class="card">
                <img src="{{ url('/assets/'.$d->photo) }}" alt="">
                <div class="movie-title">{{$d->title}}</div>
                <a href="{{url('/movie/'.$d->id)}}" class="movie-button">Details</a>
            </div>
            @endforeach
        </div>
        <div>
            <h2>TV SERIES</h2>
            <span><a href="/genre/tv-series">View All TV Series >></a></span>
        </div>
        <div class="row-cont">
            @foreach ($tvs as $t)
            <div class="card">
                <img src="{{ url('/assets/'.$t->photo) }}" alt="">
                <div class="movie-title">{{$t->title}}</div>
                <a href="{{url('/movie/'.$t->id)}}" class="movie-button">Details</a>
            </div>
            @endforeach
        </div>
        <div>
            <h2>KIDS SHOW</h2>
            <span><a href="/genre/kids">View All Kids Show >></a></span>
        </div>
        <div class="row-cont">
            @foreach ($kids as $k)
            <div class="card">
                <img src="{{ url('/assets/'.$k->photo) }}" alt="">
                <div class="movie-title">{{$k->title}}</div>
                <a href="{{url('/movie/'.$k->id)}}" class="movie-button">Details</a>
            </div>
            @endforeach
            
        </div>
    </div>
</body>
</html>