<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discounts')->insert([
            //
            [
                'name' => 'Giảm 20% Tất Cả Sản Phẩm',
                'description' => 'Áp dụng cho tất cả sản phẩm trong cửa hàng.',
                'value' => 20, // 20% giảm giá
                'time_end' => Carbon::now()->addDays(7), // Kết thúc sau 7 ngày

            ],
            [
                'name' => 'Giảm 50K cho đơn từ 500K',
                'description' => 'Khuyến mãi áp dụng cho đơn hàng từ 500K trở lên.',
                'value' => 5, // Giảm 50,000 VNĐ
                'time_end' => null,

            ]
        ]);
    }
}
