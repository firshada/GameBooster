<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
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
                'date' => '2023-12-7',
                'user_id' => 1,
                'payment_method_id' => 1,
                'topup_id' => 1,
                'topup_category_id' => 1
            ],
            [
                'date' => '2023-12-7',
                'user_id' => 2,
                'payment_method_id' => 2,
                'topup_id' => 2,
                'topup_category_id' => 2
            ],
            [
                'date' => '2023-12-7',              
                'user_id' => 3,
                'payment_method_id' => 3,
                'topup_id' => 3,
                'topup_category_id' => 3
            ],
        ];

        DB::table('transactions')->insert($datas);
    }

    
}
