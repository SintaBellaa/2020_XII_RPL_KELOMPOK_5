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
        DB::table('offense_categories')->insert([
        	'ofc_name' => 'tidak membawa al-quran',
        	'ofc_point' => '2'
        ]);

        DB::table('offense_categories')->insert([
        	'ofc_name' => 'memakai make up yang berlebihan',
        	'ofc_point' => '3'
        ]);

        DB::table('offense_categories')->insert([
        	'ofc_name' => 'rambut yang di warnai',
        	'ofc_point' => '5'
        ]);

        DB::table('offense_categories')->insert([
        	'ofc_name' => 'tidak memakai kerudung kec non muslim',
        	'ofc_point' => '10'
        ]);

        DB::table('offense_categories')->insert([
        	'ofc_name' => 'bolos pelajaran',
        	'ofc_point' => '20'
        ]);

        DB::table('offense_categories')->insert([
        	'ofc_name' => 'membawa senjata tajam',
        	'ofc_point' => '40'
        ]);

        DB::table('offense_categories')->insert([
        	'ofc_name' => 'melakukan tindakan asusila dan pornograpi',
        	'ofc_point' => '100'
        ]);
    }
}
