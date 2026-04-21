<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_reviews')->insert([
            [
                'id_user' => 1,
                'content' => 'Amazing product! Highly recommend.',
                'status' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'content' => 'Good quality, but a bit expensive.',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'content' => 'Average product, nothing special.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 4,
                'content' => 'chất lượng tốt, tôi rất thích kiểu dáng của mẫu xe này và tôi sẽ quay lại.',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 5,
                'content' => 'Chiếc TMDT tuyệt vời cho con trai tôi, đặc biệt là khi nó có màu mà cháu yêu thích.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'content' => 'Chiếc TMDT này ổn. Tốt cho cô con gái 7 tuổi của tôi. Ổn định và đáng tin cậy cho đến nay. Nhân viên dịch vụ rất hữu ích trong việc sửa chữa các phụ kiện. Nhưng tôi ước giá cả phải chăng hơn.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
