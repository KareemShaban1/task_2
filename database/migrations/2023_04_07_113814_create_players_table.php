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
        Schema::create('players', function (Blueprint $table) {
            $table->unsignedBigInteger('player_id')->nullable();
            // $table->text('team_id')->nullable();
            $table->text('player_url')->nullable();
            $table->char('fifa_version',4)->nullable();
            $table->char('fifa_update',4)->nullable();
            $table->text('fifa_update_date')->nullable();
            $table->text('short_name')->nullable();
            $table->text('long_name')->nullable();
            $table->text('player_positions')->nullable();
            $table->text('overall')->nullable();
            $table->text('potential')->nullable();
            $table->text('value_eur')->nullable();
            $table->text('wage_eur')->nullable();
            $table->char('age',3)->nullable();
            $table->text('dob')->nullable();
            $table->text('height_cm')->nullable();
            $table->text('weight_kg')->nullable();
            $table->text('league_id')->nullable();
            $table->text('league_name')->nullable();
            $table->text('league_level')->nullable();
            $table->text('club_team_id')->nullable();
            $table->text('club_name')->nullable();
            $table->text('club_position')->nullable();
            $table->text('club_jersey_number')->nullable();
            $table->text('club_loaned_from')->nullable();
            $table->text('club_joined_date')->nullable();
            $table->text('club_contract_valid_until_year')->nullable();
            $table->text('nationality_id')->nullable();
            $table->text('nationality_name')->nullable();
            $table->text('nation_team_id')->nullable();
            $table->text('nation_position')->nullable();
            $table->text('nation_jersey_number')->nullable();
            $table->text('preferred_foot')->nullable();
            $table->text('weak_foot')->nullable();
            $table->text('skill_moves')->nullable();
            $table->text('international_reputation')->nullable();
            $table->text('work_rate')->nullable();
            $table->text('body_type')->nullable();
            $table->text('real_face')->nullable();
            $table->text('release_clause_eur')->nullable();
            $table->text('player_tags')->nullable();
            $table->text('player_traits')->nullable();
            $table->char('pace',3)->nullable();
            $table->char('shooting',3)->nullable();
            $table->char('passing',3)->nullable();
            $table->char('dribbling',3)->nullable();
            $table->char('defending',3)->nullable();
            $table->char('physic',3)->nullable();
            $table->char('attacking_crossing',3)->nullable();
            $table->char('attacking_finishing',3)->nullable();
            $table->char('attacking_heading_accuracy',3)->nullable();
            $table->char('attacking_short_passing',3)->nullable();
            $table->char('attacking_volleys',3)->nullable();
            $table->char('skill_dribbling',3)->nullable();
            $table->char('skill_curve',3)->nullable();
            $table->char('skill_fk_accuracy',3)->nullable();
            $table->char('skill_long_passing',3)->nullable();
            $table->char('skill_ball_control',3)->nullable();
            $table->char('movement_acceleration',3)->nullable();
            $table->char('movement_sprint_speed',3)->nullable();
            $table->char('movement_agility',3)->nullable();
            $table->char('movement_reactions',3)->nullable();
            $table->char('movement_balance',3)->nullable();
            $table->char('power_shot_power',3)->nullable();
            $table->char('power_jumping',3)->nullable();
            $table->char('power_stamina',3)->nullable();
            $table->char('power_strength',3)->nullable();
            $table->char('power_long_shots',3)->nullable();
            $table->char('mentality_aggression',3)->nullable();
            $table->char('mentality_interceptions',3)->nullable();
            $table->char('mentality_positioning',3)->nullable();
            $table->char('mentality_vision',3)->nullable();
            $table->char('mentality_penalties',3)->nullable();
            $table->char('mentality_composure',3)->nullable();
            $table->char('defending_marking_awareness',3)->nullable();
            $table->char('defending_standing_tackle',3)->nullable();
            $table->char('defending_sliding_tackle',3)->nullable();
            $table->char('goalkeeping_diving',3)->nullable();
            $table->char('goalkeeping_handling',3)->nullable();
            $table->char('goalkeeping_kicking',3)->nullable();
            $table->char('goalkeeping_positioning',3)->nullable();
            $table->char('goalkeeping_reflexes',3)->nullable();
            $table->char('goalkeeping_speed',3)->nullable();
            
            $table->text('ls')->nullable();
            $table->text('st')->nullable();
            $table->text('rs')->nullable();
            $table->text('lw')->nullable();
            $table->text('lf')->nullable();
            $table->text('cf')->nullable();
            $table->text('rf')->nullable();
            $table->text('rw')->nullable();
            $table->text('lam')->nullable();
            $table->text('cam')->nullable();
            $table->text('ram')->nullable();
            $table->text('lm')->nullable();
            $table->text('lcm')->nullable();
            $table->text('cm')->nullable();
            $table->text('rcm')->nullable();
            $table->text('rm')->nullable();
            $table->text('lwb')->nullable();
            $table->text('ldm')->nullable();
            $table->text('cdm')->nullable();
            $table->text('rdm')->nullable();
            $table->text('rwb')->nullable();
            $table->text('lb')->nullable();
            $table->text('lcb')->nullable();
            $table->text('cb')->nullable();
            $table->text('rcb')->nullable();
            $table->text('rb')->nullable();
            $table->text('gk')->nullable();
            $table->text('player_face_url')->nullable();

            $table->text('sex')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
