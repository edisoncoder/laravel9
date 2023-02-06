<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert(
            [
                [
                    'name' => 'Area 1',
                ],
                [
                    'name' => 'Area 2',
                ],
                [
                    'name' => 'Area 3',
                ],
                [
                    'name' => 'Area 4',
                ],
                [
                    'name' => 'Area 5',
                ],
                [
                    'name' => 'Area 6',
                ],
                [
                    'name' => 'Area 7',
                ],
                [
                    'name' => 'Area 8',
                ],
                [
                    'name' => 'Area 9',
                ],
                [
                    'name' => 'Sede',
                ],
            ]
        );
    }
}
