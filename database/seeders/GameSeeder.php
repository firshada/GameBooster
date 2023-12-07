<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
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
                'game_name' => 'Mobile Legend',
            ],
            [
                'game_name' => 'PUBG Mobile',
            ],
            [
                'game_name' => 'EA FC',
            ],
            [
                'game_name' => 'Valorant',
            ],
            [
                'game_name' => 'Clash Royal',
            ],
        ];

        DB::table('games')->insert($datas);
    }
}
