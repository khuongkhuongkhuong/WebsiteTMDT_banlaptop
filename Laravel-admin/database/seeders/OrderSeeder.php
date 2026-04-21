<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders')->insert([
            [
                'id' => 1,
                'id_user' => 1,
                'id_payment' => 1,
                'status' => 3,
                'thanh_toan' => 1,
                'note' => "asdasdasd asdas  asda s awsd",
                'phone' => 012314354,
                'address' => "HCM q11",
                'total_price' => 1120000.00
            ],
            [
                'id' => 2,
                'id_user' => 1,
                'id_payment' => 1,
                'status' => 3,
                'thanh_toan' => 0,
                'note' => "asdasdasd asdas  asda s awsd",
                'phone' => 012314354,
                'address' => "HCM q11",
                'total_price' => 1120000.00
            ],
            [
                'id' => 3,
                'id_user' => 1,
                'id_payment' => 1,
                'status' => 2,
                'thanh_toan' => 0,
                'note' => "asdasdasd asdas  asda s awsd",
                'phone' => 012314354,
                'address' => "HCM q11",
                'total_price' => 1120000.00
            ],

            [
                'id' => 4,
                'id_user' => 5,
                'id_payment' => 1,
                'status' => 1,
                'thanh_toan' => 1,
                'note' => "asdasdasd asdas  asda s awsd",
                'phone' => 012314354,
                'address' => "HCM q11",
                'total_price' => 43080000.00
            ],
            [
                'id' => 5,
                'id_user' => 1,
                'id_payment' => 1,
                'status' => 0,
                'thanh_toan' => 0,
                'note' => "asdasdasd asdas  asda s awsd",
                'phone' => 012314354,
                'address' => "HCM q11",
                'total_price' => 4190000.00
            ],


        ]);
    }
}
