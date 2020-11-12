<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link rel="stylesheet" href="{{url('/css/detail.css')}}">
    <link rel="stylesheet" href="{{url('/css/header.css')}}">
</head>
<body>
    @include('header')
    <div id="main-cont">
        <div>
            <img src="{{ url('/assets/'.$movie->photo) }}" alt="">
        </div>
        <div>
            <div class="movie-title"><h2>{{$movie->title}}</h2></div>
            <div>
                @for ($i = 0; $i < $movie->rating; $i++)
                <img class="ic-star" src="{{url('/assets/star.png')}}" alt="">
                @endfor
            </div>
            <div id="movie-desc">{{$movie->description}}</div>
        </div>
        <div>

        </div>

        <div>
            <div><h3>EPISODES</h3></div>
            <table>
                <tr>
                    <th>Episode</th>
                    <th>Title</th>
                </tr>
                @foreach ($ep as $e)
                    <tr>
                        <td>{{$e->episode}}</td>
                        <td>{{$e->title}}</td>
                    </tr>
                @endforeach
                
            </table>    
            <div id="paginate-buttons">{{$ep->links()}}</div>
        </div>
    </div>
</body>
</html>