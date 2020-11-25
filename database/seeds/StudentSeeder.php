<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'nis'=>'1819.10.025',
            'name'=>'Desma',
            'class'=>'XII RPL 1',
            'gender'=>'Perempuan',
            'address'=>'kp.cembul'
        ]);

        DB::table('students')->insert([
            'nis'=>'1819.10.025',
            'name'=>'wakwaw',
            'class'=>'XII RPL 1',
            'gender'=>'Perempuan',
            'address'=>'kp.cembul'
        ]);


    }
}
