<?php

use Illuminate\Database\Seeder;

class Offense_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Offense_category::create([
            'offense_name' => 'cat rambut',
            'offense_type' => 'pribadi',
            'point'=>'5'
        ]);

         Offense_category::create([
            'offense_name' => 'merokok',
            'offense_type' => 'berat',
            'point'=>'5'
        ]);
    }
}
