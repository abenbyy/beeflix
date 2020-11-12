<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie($id){
        $movie = Movie::find($id);

        $ep = Episode::where('movie_id',$id)->paginate(3);

        return view('movie')->with('movie',$movie)->with('ep',$ep);
    }

    public function genre($category){
        $movies = null;
        if(!strcmp($category, 'drama')){
            $movies = Movie::where('genre_id',1)->get();
        }else if(!strcmp($category, 'tv-series')){
            $movies = Movie::where('genre_id',2)->get();
        }else if(!strcmp($category, 'kids')){
            $movies = Movie::where('genre_id',3)->get();
        }

        return view('genre')->with('movie', $movies);
    }

}
