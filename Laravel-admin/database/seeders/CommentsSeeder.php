<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'id_user' => 1,
                'id_product' => 1,
                'content' => 'Great product!',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'id_product' => 1,
                'content' => 'Good value for money.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'id_product' => 2,
                'content' => 'Average quality.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 4,
                'id_product' => 3,
                'content' => 'Not satisfied with the product.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 5,
                'id_product' => 4,
                'content' => 'Excellent product! Highly recommend.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
