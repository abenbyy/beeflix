<?php

use App\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 1;
        $ep->title = "A Study in Pink";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 2;
        $ep->title = "The Blind Banker";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 3;
        $ep->title = "The Great Game";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 4;
        $ep->title = "A Scandal in Belgravia";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 5;
        $ep->title = "The Hounds of Baskerville";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 6;
        $ep->title = "The Reichenbach Fall";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 7;
        $ep->title = "The Empty Hearse";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 8;
        $ep->title = "The Sign of Three";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 9;
        $ep->title = "His Last Vow";
        $ep->save();


        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 10;
        $ep->title = "The Six Thatchers";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 11;
        $ep->title = "The Lying Detective";
        $ep->save();

        $ep = new Episode();
        $ep->movie_id = 1;
        $ep->episode = 12;
        $ep->title = "The Final Problem";
        $ep->save();
    }
}

