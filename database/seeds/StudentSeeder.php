<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'stu_nis' => '1819.10.041',
        	'stu_user_id' => '3',
        	'stu_class_id' => '7',
        	'stu_gender' => 'perempuan',
        	'stu_address' => 'kp.ciborerang'

        ]);

        DB::table('students')->insert([
            'stu_nis' => '1819.10.025',
            'stu_user_id' => '2',
            'stu_class_id' => '7',
            'stu_gender' => 'perempuan',
            'stu_address' => 'kp.cembul'

        ]);

        DB::table('students')->insert([
            'stu_nis' => '1819.10.083',
            'stu_user_id' => '4',
            'stu_class_id' => '7',
            'stu_gender' => 'perempuan',
            'stu_address' => 'kp.bojong waru'

        ]);

        DB::table('students')->insert([
            'stu_nis' => '1819.10.083',
            'stu_user_id' => '5',
            'stu_class_id' => '7',
            'stu_gender' => 'perempuan',
            'stu_address' => 'kp.bojong waru'

        ]);

       
    }
}
