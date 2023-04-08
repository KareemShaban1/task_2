<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            // $table->string('team_id')->nullable();
            $table->string('team_url')->nullable();
            $table->char('fifa_version',4)->nullable();
            $table->char('fifa_update',4)->nullable();
            $table->string('fifa_update_date')->nullable();
            $table->string('team_name')->nullable();
            $table->char('league_id',4)->nullable();
            $table->string('league_name')->nullable();
            $table->char('league_level',4)->nullable();
            $table->char('nationality_id',4)->nullable();
            $table->string('nationality_name')->nullable();
            $table->char('overall',4)->nullable();
            $table->char('attack',4)->nullable();
            $table->char('midfield',4)->nullable();
            $table->char('defence',4)->nullable();
            $table->string('coach_id')->nullable();
            $table->string('home_stadium')->nullable();
            $table->string('rival_team')->nullable();
            $table->char('international_prestige',4)->nullable();
            $table->char('domestic_prestige',4)->nullable();
            $table->string('transfer_budget_eur')->nullable();
            $table->string('club_worth_eur')->nullable();
            $table->string('starting_xi_average_age')->nullable();
            $table->string('whole_team_average_age')->nullable();
            $table->string('captain')->nullable();
            $table->string('short_free_kick')->nullable();
            $table->string('long_free_kick')->nullable();
            $table->string('left_short_free_kick')->nullable();
            $table->string('right_short_free_kick')->nullable();
            $table->string('penalties')->nullable();
            $table->string('left_corner')->nullable();
            $table->string('right_corner')->nullable();
            $table->string('def_style')->nullable();
            $table->char('def_team_width',4)->nullable();
            $table->char('def_team_depth',4)->nullable();
            $table->char('def_defence_pressure',4)->nullable();
            $table->char('def_defence_aggression',4)->nullable();
            $table->char('def_defence_width',4)->nullable();
            $table->string('def_defence_defender_line')->nullable();
            $table->string('off_style')->nullable();
            $table->string('off_build_up_play')->nullable();
            $table->string('off_chance_creation')->nullable();
            $table->char('off_team_width',4)->nullable();
            $table->char('off_players_in_box',4)->nullable();
            $table->char('off_corners',4)->nullable();
            $table->char('off_free_kicks',4)->nullable();
            $table->string('build_up_play_speed')->nullable();
            $table->string('build_up_play_dribbling')->nullable();
            $table->string('build_up_play_passing')->nullable();
            $table->string('build_up_play_positioning')->nullable();
            $table->string('chance_creation_passing')->nullable();
            $table->string('chance_creation_crossing')->nullable();
            $table->string('chance_creation_shooting')->nullable();
            $table->string('chance_creation_positioning')->nullable();
            $table->string('sex');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
