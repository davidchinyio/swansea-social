<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = new Profile;
        $p->name = "Abbey Hughes";
        $p->email = "abbeythughes@gmail.com";
        $p->save();

        Profile::factory()->count(100)->create();
    }
}
