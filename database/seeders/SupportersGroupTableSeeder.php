<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SupportersGroup;


class SupportersGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = new SupportersGroup;
        $p->name = "Ten Out of Ten Hag";
        $p->save();

        $a = new SupportersGroup;
        $a->name = "Game of Stones";
        $a->save();
        
        $b = new SupportersGroup;
        $b->name = "Allison Wonderland";
        $b->save();

        $c = new SupportersGroup;
        $c->name = "Awengers Assemble";
        $c->save();

        $d = new SupportersGroup;
        $d->name = "Finding Timo";
        $d->save();

    }
}
