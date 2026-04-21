<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorySeeder extends Seeder
{
    public function run(): void
    {
        //
        DB::table('post_categories')->insert([
            [
                'name' => 'TIN TỨC',
                'status' => 1,
                "sort" => 1,
                'slug' => 'tin-tuc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KINH NGHIỆM',
                'status' => 1,
                "sort" => 2,
                'slug' => 'kinh-nghiem',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KHÁM PHÁ ',
                'slug' => 'kham-pha',
                'status' => 1,
                "sort" => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SỰ KIÊN',
                'slug' => 'su-kien',
                'status' => 1,
                "sort" => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
