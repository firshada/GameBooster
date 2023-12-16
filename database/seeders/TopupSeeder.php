<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'nominal' => '36',
                'price' => '10.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '44',
                'price' => '12.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '46',
                'price' => '13.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '59',
                'price' => '16.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '74',
                'price' => '20.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '85',
                'price' => '23.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '110',
                'price' => '30.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '148',
                'price' => '40.000',
                'game_id' => 1,
            ],
            [
                'nominal' => '500',
                'price' => '12000',
                'game_id' => 2,
            ],
            [
                'nominal' => '500',
                'price' => '12000',
                'game_id' => 3,
            ],
            
        ];
    
    DB::table('topups')->insert($datas);
    }
}
