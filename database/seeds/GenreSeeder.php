<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre();
        $genre->name = "Drama";
        $genre->save();

        $genre = new Genre();
        $genre->name = "TV Show";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Kids";
        $genre->save();
    }
}
