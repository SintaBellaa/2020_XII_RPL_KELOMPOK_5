<?php

use Illuminate\Database\Seeder;

class GradeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade_levels')->insert([
        	'grd_name' => 'X'
		]);

		 DB::table('grade_levels')->insert([
        	'grd_name' => 'XI'
		]);

		 DB::table('grade_levels')->insert([
        	'grd_name' => 'XII'
		]);
    }
}
