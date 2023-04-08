<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'team_name',
        'sex',
        'team_url',
        'fifa_version',
        'fifa_update',
        'fifa_update_date',
        'team_name',
        'league_id',
        'league_name',
        'league_level',
        'nationality_id', 
        'nationality_name',
        'overall',
        'attack',
        'midfield',
        'defence',
        'coach_id',
        'home_stadium',
        'rival_team',
        'international_prestige',
        'domestic_prestige',
        'transfer_budget_eur',
        'club_worth_eur',
        'starting_xi_average_age',
        'whole_team_average_age',
        'captain',
        'short_free_kick',
        'long_free_kick',
        'left_short_free_kick',
        'right_short_free_kick',
        'penalties',
        'left_corner',
        'right_corner',
        'def_style',
        'def_team_width',
        'def_team_depth',
        'def_defence_pressure',
        'def_defence_aggression',
        'def_defence_width',
        'def_defence_defender_line',
        'off_style',
        'off_build_up_play',
        'off_chance_creation',
        'off_team_width',
        'off_players_in_box',
        'off_corners',
        'off_free_kicks',
        'build_up_play_speed',
        'build_up_play_dribbling',
        'build_up_play_passing',
        'build_up_play_positioning',
        'chance_creation_passing',
        'chance_creation_crossing',
        'chance_creation_shooting',
        'chance_creation_positioning',

        // other columns
    ];

     // function to import team
     public static function importTeams($filename, $sex)
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

    // protected $primaryKay ='team_id';
    // public $incrementing = false;
}
