<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Import female players
         Player::importPlayers('database/data/female_players.csv', 'female');

         //// import female players (legacy)
         // $this->importPlayers('female_players (legacy).csv', 'female');
 
         // Import male players 
         //// Note => size male players file is 5 Giga.
        //  Player::importPlayers('database/data/male_players.csv', 'male');
 
         //// import male players (legacy)
         // $this->importPlayers('male_players (legacy).csv', 'male');
 
    }

    

}
