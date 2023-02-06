<?php

namespace Database\Seeders;

use App\Models\Congregation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CongregationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Congregation::insert(
            [
                [
                    'name' => 'Atuba',
                    'area_id' => 1,
                ],[
                    'name' => 'Alto da Cruz',
                    'area_id' => 1,
                ],[
                    'name' => 'Campo Alto',
                    'area_id' => 1,
                ],[
                    'name' => 'Guaruja',
                    'area_id' => 2,
                ],[
                    'name' => 'Monza',
                    'area_id' => 2,
                ],[
                    'name' => 'São Gabriel',
                    'area_id' => 2,
                ]
            ]        
    );
    }
}
