<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'status' => 'active',
            'remember_token' => Str::random(20)
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'andy',
            'email' => 'andy@gmail.com',
            'password' => bcrypt('andy'),
            'remember_token' => Str::random(20),
            'status' => 'inactive'
        ]);
    }
}
