<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OffenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offenses')->insert([
        	'ofs_student_id' => '1',
        	'ofs_offense_category_id' => '1',
            'ofs_date' => Carbon::now()
        ]);

        DB::table('offenses')->insert([
        	'ofs_student_id' => '2',
        	'ofs_offense_category_id' => '3',
            'ofs_date' => Carbon::now()
        ]);

        DB::table('offenses')->insert([
        	'ofs_student_id' => '3',
        	'ofs_offense_category_id' => '5',
            'ofs_date' => Carbon::now()
        ]);
    }
}
