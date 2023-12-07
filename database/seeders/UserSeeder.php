<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
            [
                'name' => 'Muhammad Firsha Jusaim',
                'username' => 'Firshada',
                'email' => 'firsha@binus.ac.id',
                'password' => 'Firsha12345',
            ],
            [
                'name' => 'Abiyyu Galih Ghifari',
                'username' => 'Abigalih',
                'email' => 'abiyyu@binus.ac.id',
                'password' => 'Abiyyu12345',
            ],
            [
                'name' => 'Martin Butarbutar',                
                'username' => 'martintinButar',
                'email' => 'Martinnus@binus.ac.id',
                'password' => 'Martin12345',
            ],
        ];

        DB::table('users')->insert($datas);
    }
}
