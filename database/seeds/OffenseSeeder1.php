<?php

use Illuminate\Database\Seeder;

class OffenseSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offense::create([
            'no_student' => '1',
            'no_category' => '2',
            'total_point'=>'5'
        ]);
         Offense::create([
            'no_student' => '2',
            'no_category' => '1',
            'total_point'=>'10'
        ]);
     }
}
