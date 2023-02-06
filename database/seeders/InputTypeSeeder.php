<?php

namespace Database\Seeders;

use App\Models\InputType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InputTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InputType::insert([
            ['name'=>'Pix',],
            ['name'=>'Dinheiro',],
            ['name'=>'Débito',]
        ]);
    }
}
