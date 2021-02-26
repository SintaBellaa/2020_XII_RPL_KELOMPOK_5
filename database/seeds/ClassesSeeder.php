<?php

use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            'cls_major_id' => '1',
            'cls_grade_level_id' => '1',
            'cls_number' => '1'
        ]);

         DB::table('class')->insert([
            'cls_major_id' => '2',
            'cls_grade_level_id' => '2',
            'cls_number' => '1'
        ]);

          DB::table('class')->insert([
            'cls_major_id' => '1',
            'cls_grade_level_id' => '1',
            'cls_number' => '2'
        ]);
    }
}
