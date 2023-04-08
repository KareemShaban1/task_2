## Task 2

Laravel Project that solve a specific problem with many test cases .....

## Problem 
Simply the task is to build a script to import large CSV data set into an SQL database of your choice,
Here is a dataset "FIFA 23 complete player dataset" which contains information about male & female coaches, teams, and players.

The dataset contains the following files:

    ● female_coaches.csv
    ● female_players.csv
    ● female_players (legacy).csv
    ● female_teams.csv
    ● male_coaches.csv
    ● male_players.csv
    ● male_players (legacy).csv
    ● male_teams.csv

You are required to import the data in (female_coaches.csv, female_players.csv, female_teams.csv, male_coaches.csv, male_players.csv, male_teams.csv) into the
following DB tables

    ● teams
    ● players
    ● coaches

For the tables schemas, you will need to add a column to store the sex of the row, for example, female_coaches.csv & male_coaches.csv files contain the same columns but they are separated into 2 files, you will import them into 1 table with an extra column sex.

Note: the task may be missing some details you must list the missing details and how you are gonna solve them.

You have to write the script using Laravel.

What are we focusing on

    ● Code quality & maintainability
    ● Naming conventions
    ● Follow https://spatie.be/guidelines/laravel-php as your guideline
    ● Write a README.md file that contains steps to install the project
    ● When you are done push the code on a GitHub repo and reply with the link
    ● The function body should not exceed 30 LOC.
    ● Stick to DRY principles.
    ● Base your implementation on design patterns.

Bouns

    ● Use docker through laravel/sail to run the project
    ● Write unit tests for your code
    ● Deploy on a server if you can, it's okay if you didn't

## How to install

    - Download the project --OR-- Clone the repository with __git clone__
    - Download data from the in database/data/csv files.txt and place it in the same file
    - Copy __.env.example__ file to __.env__ and edit database credentials there 
    - Run __composer install__
    - Set the encryption key by executing  __php artisan key:generate__
    - Run __php artisan migrate --seed__ 
    - Start local server by executing __php artisan serve__ 
    - Open new terminal and navigate to the project root directory
    - Run php artisan command __php artisan import:data__ to import data from csv files to database 
    - Use Test Case class called ImportDataTest__ using PHPUnit

- - - - -
