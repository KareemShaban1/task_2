<?php

namespace App\Console\Commands;

use App\Models\Coach;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Console\Command;

class ImportDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:import-data-command';
    protected $signature = 'import:data';

    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        //
        // Import female coaches
        $this->importCoaches('database/data/female_coaches.csv', 'female');

        // Import male coaches
        $this->importCoaches('database/data/male_coaches.csv', 'male');

        // Import female players
        $this->importPlayers('database/data/female_players.csv', 'female');
        //// import female players (legacy)
        // $this->importPlayers('female_players (legacy).csv', 'female');

        // Import male players
        ////size male players file is 5 G.
        // $this->importPlayers('database/data/male_players.csv', 'male');
        //// import male players (legacy)
        // $this->importPlayers('male_players (legacy).csv', 'male');

        // Import female teams
        $this->importTeams('database/data/female_teams.csv', 'female');

        // Import male teams
        $this->importTeams('database/data/male_teams.csv', 'male');
    }


    // function to import coach
    private function importCoaches($filename, $sex)
    {
        $file = fopen($filename, 'r');
        $header = fgetcsv($file);

        while ($row = fgetcsv($file)) {
            $data = array_combine($header, $row);
            $data['sex'] = $sex;

            Coach::create($data);
        }

        fclose($file);
    }

    // function to import players
    private function importPlayers($filename, $sex)
    {
        $file = fopen($filename, 'r');
        $header = fgetcsv($file);

            while ($row = fgetcsv($file)) {
                $data = array_combine($header, $row);
                $data['sex'] = $sex;
                Player::create($data);
            }


        fclose($file);
    }

    // function to import team
    private function importTeams($filename, $sex)
    {
        $file = fopen($filename, 'r');
        $header = fgetcsv($file);

        while ($row = fgetcsv($file)) {
            $data = array_combine($header, $row);
            $data['sex'] = $sex;
            Team::create($data);
        }

        fclose($file);
    }
}
