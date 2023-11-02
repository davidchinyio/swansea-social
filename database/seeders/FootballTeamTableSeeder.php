<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FootballTeam;


class FootballTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = new FootballTeam;
        $p->name = "Manchester United";
        $p->nickname = "Red Devils";
        $p->profile_id = 1;
        $p->save();
    }
}
