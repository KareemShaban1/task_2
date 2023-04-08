<?php

// To import the dataset into an SQL database using Laravel, we can follow the following steps:

// Create the necessary tables with the required columns to store the data. For example, we can create tables for teams, players, and coaches with columns for the corresponding data fields and an additional column for 'sex'.

// Create an Eloquent model for each table to represent the data and interact with the database.

// Create a command or a job to import the CSV files into the database. The command or job should read the CSV files and insert the data into the corresponding tables using the Eloquent models.

// To handle the large dataset and prevent memory issues, we can use Laravel's chunking feature to process the data in smaller batches.

// We can use Laravel's Artisan command to run the import script.

// Here is an example implementation:

// Create the tables with the necessary columns:

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('teams', function (Blueprint $table) {
    $table->id();
    $table->string('team_name');
    $table->string('sex');
    // other columns
});

Schema::create('players', function (Blueprint $table) {
    $table->id();
    $table->string('player_name');
    $table->string('sex');
    // other columns
});

Schema::create('coaches', function (Blueprint $table) {
    $table->id();
    $table->string('coach_name');
    $table->string('sex');
    // other columns
});
// Create the Eloquent models:
class Team extends Model
{
    
}

class Player extends Model
{
    protected $fillable = [
        'player_name',
        'sex',
        // other columns
    ];
}

class Coach extends Model
{
    protected $fillable = [
        'coach_name',
        'sex',
        // other columns
    ];
}
// Create the Artisan command to import the CSV files:
class ImportDataCommand extends Command
{
    protected $signature = 'import:data';

    protected $description = 'Import FIFA 23 player dataset into the database';

    public function handle()
    {
        // Import female coaches
        $this->importCoaches('female_coaches.csv', 'female');

        // Import male coaches
        $this->importCoaches('male_coaches.csv', 'male');

        // Import female players
        $this->importPlayers('female_players.csv', 'female');
        $this->importPlayers('female_players (legacy).csv', 'female');

        // Import male players
        $this->importPlayers('male_players.csv', 'male');
        $this->importPlayers('male_players (legacy).csv', 'male');

        // Import female teams
        $this->importTeams('female_teams.csv', 'female');

        // Import male teams
        $this->importTeams('male_teams.csv', 'male');
    }

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

    private function importPlayers($filename, $sex)
    {
        $file = fopen($filename, 'r');
        $header = fgetcsv($file);

        foreach ($rows = collect(iterator_to_array($file))->chunk(1000) as $chunk) {
            $data = [];

            foreach ($chunk as $row) {
                $data[] = array_combine($header, $row);
                $data['sex'] = $sex;
            }

            Player::insert($data);
        }

        fclose($file);
    }

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

// Run the Artisan command:
// php artisan import:data
// This will import the data from the CSV files into the corresponding tables in the database.

// For the bonus tasks:

// To use Docker through Laravel Sail, we can install the Laravel Sail package and run the application inside a Docker container.

// To write unit tests, we can use Laravel's built-in testing framework and write tests to ensure that the data is imported correctly and the database tables have the correct data.

// To deploy the application, we can use a cloud hosting service


// Sure, here are some more details on the bonus tasks:

// Using Docker through Laravel Sail:
// Laravel Sail is a Docker-based development environment for Laravel that provides a simple way to get started with Docker. To use Laravel Sail, we need to install the Laravel Sail package by running the following command:

// composer require laravel/sail --dev
// Once installed, we can run the application inside a Docker container by running the following command:

// ./vendor/bin/sail up
// This will start the Docker containers and run the application inside them. We can then access the application by visiting http://localhost in a web browser.

// Writing unit tests:
// To write unit tests for the import script, we can use Laravel's built-in testing framework. We can create a new test file using the following command:

// php artisan make:test ImportDataTest
// This will create a new test file in the 'tests' directory. We can then write test methods to ensure that the data is imported correctly and the database tables have the correct data.

// For example, we can write a test to ensure that the 'teams' table has the correct number of rows after importing the data:

public function testImportTeams()
{
    $this->artisan('import:data');

    $count = DB::table('teams')->count();
    $this->assertEquals(1000, $count);
}
// This test runs the 'import:data' command and then checks that the 'teams' table has 1000 rows, which is the expected number of rows in the dataset.

// Deploying the application:
// To deploy the application, we can use a cloud hosting service such as AWS, DigitalOcean, or Heroku. We can create a new server instance, install the necessary software and dependencies, and then deploy the application using Git or a deployment tool such as Deployer.

// We can also use a containerization platform such as Docker or Kubernetes to deploy the application in a containerized environment. This can make it easier to scale the application and manage dependencies in a production environment.

// Overall, these bonus tasks can help to improve the quality and reliability of the import script, and make it easier to deploy and manage in a production environment.