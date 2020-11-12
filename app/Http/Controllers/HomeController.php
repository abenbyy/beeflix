<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $drama = Movie::where('genre_id', 1)->get();
        $tv = Movie::where('genre_id', 2)->get();
        $kids = Movie::where('genre_id', 3)->get();

        //dd($drama);
        return view('home',
        ['dramas' => $drama,
        'tvs' => $tv,
        'kids' => $kids]);
    }
}
