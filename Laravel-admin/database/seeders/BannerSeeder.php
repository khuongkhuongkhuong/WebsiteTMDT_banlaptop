<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('banners')->insert([
            [
                'position' => 1,
                'image' => '/img/banner/banner-5.jpg',
                'link' => 'http://example1.com',
                'title1' => 'TMDT đua',
                'title2' => 'khẳng định cá tính riêng của bạn',
                'sort' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 1,
                'image' => '/img/banner/banner-1958-x-745-key-visual-2025-.jpg',
                'link' => 'http://example2.com',
                'title1' => 'Primary Title 2',
                'title2' => 'Secondary Title 2',
                'sort' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 1,
                'image' => '/img/banner/banner-jeeb-2.jpg',
                'link' => 'san-pham?brand=thuong-hieu-jeep-18',
                'title1' => 'Primary Title 3',
                'title2' => 'Secondary Title 3',
                'sort' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 1,
                'image' => '/img/banner/ctkm-thang-1-banner.jpg',
                'link' => 'http://example4.com',
                'title1' => 'Primary Title 4',
                'title2' => 'Secondary Title 4',
                'sort' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 1,
                'image' => '/img/banner/xe_dap_dia_hinh.jpg',
                'link' => 'san-pham?category=xe-dap-dia-hinh-3',
                'title1' => 'Primary Title 5',
                'title2' => 'Secondary Title 5',
                'sort' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 1,
                'image' => '/img/banner/xe_dap_tre_em.jpg',
                'link' => 'san-pham?category=xe-dap-tre-em-10',
                'title1' => 'Primary Title 5',
                'title2' => 'Secondary Title 5',
                'sort' => 66,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 2,
                'image' => '/img/banner/xe-dap-dua-homepage.png',
                'link' => 'http://example5.com',
                'title1' => 'Primary Title 5',
                'title2' => 'Secondary Title 5',
                'sort' => 66,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 2,
                'image' => '/img/banner/xe-dap-the-thao-duong-pho-homepage.png',
                'link' => 'http://example5.com',
                'title1' => 'Primary Title 5',
                'title2' => 'Secondary Title 5',
                'sort' => 66,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 3,
                'image' => '/img/banner/bannersele.png',
                'link' => 'http://example5.com',
                'title1' => 'Primary Title 5',
                'title2' => 'Secondary Title 5',
                'sort' => 66,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
