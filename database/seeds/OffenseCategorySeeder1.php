<?php

use Illuminate\Database\Seeder;

class OffenseCategorySeeder1 extends Seeder
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
            'point'=>'5'
        ]);

         Offense_category::create([
            'offense_name' => 'merokok',
            'point'=>'5'
        ]);
    }
}
