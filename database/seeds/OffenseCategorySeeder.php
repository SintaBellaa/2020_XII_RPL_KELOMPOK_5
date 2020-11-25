<?php

use Illuminate\Database\Seeder;

class OffenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offense_category')->insert([
            'offense_name' => 'cat rambut',
            'offense_type' => 'pribadi',
            'point'=>'5'
        ]);

        DB::table('offense_category')->insert([
            'offense_name' => 'merokok',
            'offense_type' => 'berat',
            'point'=>'5'
        ]);
    }
}
