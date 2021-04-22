x<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'usr_email' => 'admin@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('admin123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

        $a = User::create([
            'usr_name' => 'Iis',
            'usr_email' => 'iis@gmail.com',
            'usr_phone' => '08965625149',
            'usr_password' => Hash::make('student1'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $a->assignRole('student');

        $b = User::create([
            'usr_name' => 'Desma',
            'usr_email' => 'desma@gmail.com',
            'usr_phone' => '08267091743',
            'usr_password' => Hash::make('student1'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $b->assignRole('student');

        $c = User::create([
            'usr_name' => 'Sinta',
            'usr_email' => 'sinta@gmail.com',
            'usr_phone' => '081135243979',
            'usr_password' => Hash::make('student1'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $c->assignRole('student');
       
    }
}
