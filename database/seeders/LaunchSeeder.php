<?php

namespace Database\Seeders;

use App\Models\Launch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaunchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Launch::insert([
            ['date'=>'2023-01-18', 'status'=>'1', 'amount'=> 15.50, 'user_id'=>1, 'congregation_id'=>1, 'input_type_id'=>1, 'launch_type_id'=> 1,],
            ['date'=>'2023-01-08', 'status'=>'2', 'amount'=> 22.30, 'user_id'=>1, 'congregation_id'=>1, 'input_type_id'=>1, 'launch_type_id'=> 1,],
            ['date'=>'2023-01-10', 'status'=>'1', 'amount'=> 185.00, 'user_id'=>1, 'congregation_id'=>2, 'input_type_id'=>1, 'launch_type_id'=> 2,],
            ['date'=>'2023-01-17', 'status'=>'2', 'amount'=> 135.50, 'user_id'=>1, 'congregation_id'=>1, 'input_type_id'=>1, 'launch_type_id'=> 1,],
            ['date'=>'2023-01-18', 'status'=>'3', 'amount'=> 5.50, 'user_id'=>1, 'congregation_id'=>2, 'input_type_id'=>1, 'launch_type_id'=> 1,],
            ['date'=>'2023-01-13', 'status'=>'1', 'amount'=> 1.50, 'user_id'=>1, 'congregation_id'=>1, 'input_type_id'=>1, 'launch_type_id'=> 2,],
            ['date'=>'2023-01-11', 'status'=>'2', 'amount'=> 150, 'user_id'=>1, 'congregation_id'=>2, 'input_type_id'=>1, 'launch_type_id'=> 1,],
            ['date'=>'2023-01-18', 'status'=>'1', 'amount'=> 10, 'user_id'=>1, 'congregation_id'=>1, 'input_type_id'=>1, 'launch_type_id'=> 2,],
            ['date'=>'2023-01-05', 'status'=>'2', 'amount'=> 10.50, 'user_id'=>1, 'congregation_id'=>2, 'input_type_id'=>1, 'launch_type_id'=> 1,],
            ['date'=>'2023-01-18', 'status'=>'4', 'amount'=> 18.55, 'user_id'=>1, 'congregation_id'=>1, 'input_type_id'=>1, 'launch_type_id'=> 1,],
        ]);
    }
}
