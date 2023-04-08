<?php

namespace Tests\Feature;

use App\Models\Coach;
use App\Models\Player ;
use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImportDataTest extends TestCase
{

    use RefreshDatabase;

    //// import coach test case
    public function test_import_coach()
    {
        $this->artisan('import:data');

        $count = Coach::all()->count();
        // dd($count);
        $this->assertEquals(1207, $count);
    }

      //// import team test case
    public function test_import_team()
    {
        $this->artisan('import:data');

        $count = Team::all()->count();
        // dd($count);
        $this->assertNotEquals(0, $count);
    }


      //// import player test case
    public function test_import_player()
    {
        $this->artisan('import:data');

        $count = Player::all()->count();
        // dd($count);
        $this->assertNotEquals(0, $count);
    }
}
