<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommisionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commissions')->insert([
                ['name'=>'Bronze','rate'=>2],
                ['name'=>'Silver','rate'=>2.5],
                ['name'=>'Gold','rate'=>3],
                ['name'=>'Platinum','rate'=>3.5],
        ]);
    }
}
