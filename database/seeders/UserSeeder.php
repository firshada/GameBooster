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
                'phone' => '081345678900',
                'email' => 'firsha@binus.ac.id',
                'password' => 'Firsha12345',
            ],
            [
                'name' => 'Abiyyu Galih Ghifari',
                'username' => 'Abigalih',
                'phone' => '081345678911',
                'email' => 'abiyyu@binus.ac.id',
                'password' => 'Abiyyu12345',
            ],
            [
                'name' => 'Martin Butarbutar',                
                'username' => 'martintinButar',
                'phone' => '081345678922',
                'email' => 'Martinnus@binus.ac.id',
                'password' => 'Martin12345',
            ],
        ];

        DB::table('users')->insert($datas);
    }
}
