<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
           // Import female teams
           Team::importTeams('database/data/female_teams.csv', 'female');

           // Import male teams
           Team::importTeams('database/data/male_teams.csv', 'male');
    }


   
}
