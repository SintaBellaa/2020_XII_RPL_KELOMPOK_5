<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OffenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offense')->insert([
            'no_student' => '1',
            'no_category' => '2',
            'total_point'=>'5'
        ]);
        DB::table('offense')->insert([
            'no_student' => '2',
            'no_category' => '1',
            'total_point'=>'10'
        ]);
    }
}
