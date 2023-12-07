<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopupCategorySeeder extends Seeder
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
                'topup_cat_name' => 'Token',
            ],
            [
                'topup_cat_name' => 'Diamond',
            ],
            [
                'topup_cat_name' => 'Point',
            ],
        ];

        DB::table('topup_categories')->insert($datas);
    }
}
