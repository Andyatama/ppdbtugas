<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::tables('roles')->insert(
            [
                'name' => 'admin'
            ],

            [
                'name' => 'siswa'
            ]
            );
    }
}
