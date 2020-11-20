<?php

use Illuminate\Database\Seeder;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Student::create([
            'nis'=>'1819.10.025',
            'name'=>'Desma',
            'class'=>'XII RPL 1',
            'gender'=>'Perempuan',
            'address'=>'kp.cembul'
    ]);
  }
}
