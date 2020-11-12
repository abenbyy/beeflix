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
        $sherlock = array(
            'A Study in Pink',
            'The Blind Banker',
            'The Great Game',
            'A Scandal in Belgravia',
            'The Hounds of Baskerville',
            'The Reichenbach Fall',
            'The Empty Hearse',
            'The Sign of Three',
            'His Last Vow',
            'The Six Thatchers',
            'The Lying Detective',
            'The Final Problem',
        );

        for($i=0;$i<count($sherlock);$i++){
            $ep = new Episode();
            $ep->movie_id = 1;
            $ep->episode = $i+1;
            $ep->title = $sherlock[$i];
            $ep->save();
        }


        $kimetsu = array('Cruelty',
        'Trainer Sakonji Urokodaki', 
        'Sabito and Makomo', 
        'Final Selection', 
        'My Own Steel', 
        'Swordsman Accompanying a Demon', 
        'Muzan Kibutsuji', 
        'The Smell of Enchanting Blood', 
        'Temari Demon and Arrow Demon', 
        'Together Forever', 
        'Tsuzumi Mansion',
        'The Boar Bares Its Fangs, Zenitsu Sleeps',
        'Something More Important Than Life',
        'The House with the Wisteria Family Crest',
        'Mount Natagumo',
        'Letting Someone Else Go First',
        'You Must Master a Single Thing',
        'A Forged Bond', 
        'Hinokami',
        'Pretend Family',
        'Against Corps Rules',
        'Master of the Mansion',
        'Hashira Meeting',
        'Rehabilitation Training',
        'Tsuguko, Kanao Tsuyuri',
        'New Mission');
        
        for($i=0;$i<count($kimetsu);$i++){
            $ep = new Episode();
            $ep->movie_id = 9;
            $ep->episode = $i+1;
            $ep->title = $kimetsu[$i];
            $ep->save();
        }
    }
}

