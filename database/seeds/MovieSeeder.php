<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie();
        $movie->genre_id = 1;
        $movie->title = "Sherlock";
        $movie->photo = "sherlock.jpg";
        $movie->description = "A modern update finds the famous sleuth and his doctor partner solving crime in 21st century London.";
        $movie->rating = 5;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 1;
        $movie->title = "Vikings";
        $movie->photo = "vikings.jpg";
        $movie->description = "Vikings transports us to the brutal and mysterious world of Ragnar Lothbrok, a Viking warrior and farmer who yearns to explore - and raid - the distant shores across the ocean";
        $movie->rating = 4;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 1;
        $movie->title = "Peaky Blinders";
        $movie->photo = "peaky_blinders.jpg";
        $movie->description = "A gangster family epic set in 1900s England, centering on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby.";
        $movie->rating = 5;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 1;
        $movie->title = "Lucifer";
        $movie->photo = "lucifer.jpg";
        $movie->description = "Lucifer Morningstar has decided he's had enough of being the dutiful servant in Hell and decides to spend some time on Earth to better understand humanity. He settles in Los Angeles - the City of Angels.";
        $movie->rating = 4;
        $movie->save();



        $movie = new Movie();
        $movie->genre_id = 2;
        $movie->title = "How I Met Your Mother";
        $movie->photo = "himym.jpg";
        $movie->description = "A father recounts to his children - through a series of flashbacks - the journey he and his four best friends took leading up to him meeting their mother.";
        $movie->rating = 5;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 2;
        $movie->title = "The Big Bang Theory";
        $movie->photo = "big_bang_theory.jpg";
        $movie->description = "A woman who moves into an apartment across the hall from two brilliant but socially awkward physicists shows them how little they know about life outside of the laboratory.";
        $movie->rating = 5;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 2;
        $movie->title = "Brooklyn Nine Nine";
        $movie->photo = "brooklyn_nine_nine.jpg";
        $movie->description = "Brooklyn Nine-Nine follows the exploits of hilarious Det. Jake Peralta and his diverse, lovable colleagues as they police the NYPD's 99th Precinct.";
        $movie->rating = 4;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 2;
        $movie->title = "Friends";
        $movie->photo = "friends.jpg";
        $movie->description = "Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan";
        $movie->rating = 4;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 3;
        $movie->title = "Kimetsu No Yaiba";
        $movie->photo = "kimetsu_no_yaiba.jpg";
        $movie->description = "A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.";
        $movie->rating = 5;
        $movie->save();

        $movie = new Movie();
        $movie->genre_id = 3;
        $movie->title = "Fire Force";
        $movie->photo = "fire_force.jpg";
        $movie->description = "A superhuman firefighter force is formed to deal with supernatural fire incidents.";
        $movie->rating = 4;
        $movie->save();
        
        $movie = new Movie();
        $movie->genre_id = 3;
        $movie->title = "Naruto";
        $movie->photo = "naruto.jpg";
        $movie->description = "Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village's leader and strongest ninja.";
        $movie->rating = 4;
        $movie->save();
        
        $movie = new Movie();
        $movie->genre_id = 3;
        $movie->title = "Sword Art Online";
        $movie->photo = "sao.jpg";
        $movie->description = "In the year 2022, thousands of people get trapped in a new virtual MMORPG and the lone wolf player, Kirito, works to escape.";
        $movie->rating = 4;
        $movie->save();
    }
}
