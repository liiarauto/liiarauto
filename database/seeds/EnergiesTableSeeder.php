<?php

use Illuminate\Database\Seeder;
use LiiarAuto\Energie as Energie;

class EnergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Energie::create([
            'libelle' => 'Essence'
        ]);
        Energie::create([
            'libelle' => 'Diesel'
        ]);
    }
}
