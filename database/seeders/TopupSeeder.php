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
                'nominal' => '500',
                'price' => '12000',
                'game_id' => 1,
                'topup_category_id' => 1
            ],
            [
                'nominal' => '500',
                'price' => '12000',
                'game_id' => 2,
                'topup_category_id' => 2
            ],
            [
                'nominal' => '500',
                'price' => '12000',
                'game_id' => 3,
                'topup_category_id' => 3
            ],
            
        ];
    
    DB::table('topups')->insert($datas);
    }
}
