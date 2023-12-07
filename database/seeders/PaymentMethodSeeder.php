<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
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
                'payment_name' => 'Gopay',
            ],
            [
                'payment_name' => 'OVO',
            ],
            [
                'payment_name' => 'BCA',
            ],
            [
                'payment_name' => 'BRI',
            ],
            [
                'payment_name' => 'CIMB NIAGA',
            ],
        ];

        DB::table('payment_methods')->insert($datas);
    }
}
