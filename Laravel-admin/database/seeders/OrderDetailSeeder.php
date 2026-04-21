<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders_details')->insert([
            [
                'id_variant' => 1,
                'id_order' => 1,
                'price' => 1120000.00,
                'quantity' => 1,
            ],
            [
                'id_variant' => 2,
                'id_order' => 2,
                'price' => 1120000.00,
                'quantity' => 1,
            ],
            [
                'id_variant' => 3,
                'id_order' => 2,
                'price' => 1120000.00,
                'quantity' => 4,
            ],

            // [
            //     'id_product' => 6,
            //     'id_order' => 4,
            //     'price' => 21290000.00,
            //     'quantity' => 1,
            // ],
            // [
            //     'id_product' => 7,
            //     'id_order' => 4,
            //     'price' => 21790000.00,
            //     'quantity' => 1,
            // ],

            // [
            //     'id_product' => 65,
            //     'id_order' => 5,
            //     'price' => 1120000.00,
            //     'quantity' => 1,
            // ],



        ]);
    }
}
