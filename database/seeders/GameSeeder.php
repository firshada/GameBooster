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
                'game_name' => 'Valorant',
                'game_image' => 'serv1.png', 
                'developer' => 'Riot Games'
            ],
            [
                'game_name' => 'Mobile Legend',
                'game_image' => 'serv2.png',
                'developer' => 'Moonton'
            ],
            [
                'game_name' => 'EA FC',
                'game_image' => 'serv3.png',
                'developer' => 'EA Sports'
            ],
            [
                'game_name' => 'Free Fire',
                'game_image' => 'serv4.png',
                'developer' => 'Garena'
            ],
            [
                'game_name' => 'COD',
                'game_image' => 'serv5.png',
                'developer' => 'Garena'
            ],
            [
                'game_name' => 'League of Legend',
                'game_image' => 'serv6.png',
                'developer' => 'Riot Games'
            ],
            [
                'game_name' => 'AOV',
                'game_image' => 'serv7.png',
                'developer' => 'Garena'
            ],
            [
                'game_name' => 'Genshin Impact',
                'game_image' => 'serv8.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Sausage Man',
                'game_image' => 'serv9.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Seal Mobile',
                'game_image' => 'serv10.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Honkai Impact',
                'game_image' => 'serv11.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Clash of Clans',
                'game_image' => 'serv12.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Clash Royal',
                'game_image' => 'serv13.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Brawl Stars',
                'game_image' => 'serv14.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Hay Day',
                'game_image' => 'serv15.png',
                'developer' => 'gas'
            ],
            [
                'game_name' => 'Metal Slug',
                'game_image' => 'serv16.png',
                'developer' => 'gas'
            ],
        ];

        DB::table('games')->insert($datas);
    }
}
