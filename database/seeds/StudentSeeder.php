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
        	'stu_nis' => '1819.10.089',
        	'stu_user_id' => '2',
        	'stu_class_id' => '1',
        	'stu_gender' => 'laki-laki',
        	'stu_address' => 'Rancamanyar'

        ]);

         DB::table('students')->insert([
        	'stu_nis' => '1819.10.056',
        	'stu_user_id' => '1',
        	'stu_class_id' => '1',
        	'stu_gender' => 'perempuan',
        	'stu_address' => 'Bojong'

        ]);

          DB::table('students')->insert([
        	'stu_nis' => '1819.10.009',
        	'stu_user_id' => '1',
        	'stu_class_id' => '2',
        	'stu_gender' => 'laki-laki',
        	'stu_address' => 'Bandung'

        ]);

          DB::table('students')->insert([
        	'stu_nis' => '1819.10.034',
        	'stu_user_id' => '1',
        	'stu_class_id' => '2',
        	'stu_gender' => 'laki-laki',
        	'stu_address' => 'Cembul'

        ]);

          DB::table('students')->insert([
        	'stu_nis' => '1819.10.032',
        	'stu_user_id' => '1',
        	'stu_class_id' => '2',
        	'stu_gender' => 'perempuan',
        	'stu_address' => 'kopo'

        ]);
    }
}
