<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('payments')->insert([
            [
                'payment_method' => 'Thanh toán tiền mặt tại cửa hàng 💵',
                'bank' => null,
                'bank_number' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_method' => 'Thanh toán online Vietcombank',
                'bank' => "Vietcombank",
                'bank_number' => "1028443409",
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_method' => 'Thanh toán online MBBank',
                'bank' => "MBBank",
                'bank_number' => "0827505405",
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_method' => 'Thanh toán LPO',
                'bank' => null,
                'bank_number' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
