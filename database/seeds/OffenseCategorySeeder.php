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
        	'ofc_name' => 'mewarnai Rambut',
        	'ofc_point' => '5'
        ]);

         DB::table('offense_categories')->insert([
            'ofc_name' => 'Tidak Memakai atribut sekolah',
            'ofc_point' => '2'
        ]);

          DB::table('offense_categories')->insert([
            'ofc_name' => 'memakai Knalpot Bising',
            'ofc_point' => '5'
        ]);
       
        DB::table('offense_categories')->insert([
            'ofc_name' => 'makan dan minum sambil berdiri',
            'ofc_point' => '5'
        ]);

         DB::table('offense_categories')->insert([
            'ofc_name' => 'merokok',
            'ofc_point' => '40'
        ]);
    }
}
