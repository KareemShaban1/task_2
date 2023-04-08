<?php

namespace Database\Seeders;

use App\Models\Coach;
use Illuminate\Database\Seeder;


class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Import female coaches
         Coach::importCoaches('database/data/female_coaches.csv', 'female');

         // Import male coaches
         Coach::importCoaches('database/data/male_coaches.csv', 'male');


    }
 
    }

