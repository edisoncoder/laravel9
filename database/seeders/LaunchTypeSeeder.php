<?php

namespace Database\Seeders;

use App\Models\LaunchType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaunchTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LaunchType::insert([
            ['name'=>'Oferta',],
            ['name'=>'Dízimo',],
            ['name'=>'Voto',]
        ]);
    }
}
