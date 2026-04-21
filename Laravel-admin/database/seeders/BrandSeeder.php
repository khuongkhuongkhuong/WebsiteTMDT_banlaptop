<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('brands')->insert([
            [
                'name' => 'Brave Will',
                'logo' => '/img/brand/bravewill.png',
                'status' => 1,
                'slug' => 'thuong-hieu-brave-will-1',
                'sort' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fornix',
                'logo' => '/img/brand/fornix-1.png',
                'status' => 1,
                'slug' => 'thuong-hieu-fornix-2',
                'sort' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Funky',
                'logo' => '/img/brand/funky.png',
                'status' => 1,
                'slug' => 'thuong-hieu-funky-3',
                'sort' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Giant',
                'logo' => '/img/brand/giant-1.png',
                'status' => 1,
                'slug' => 'thuong-hieu-giant-4',
                'sort' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Life',
                'logo' => '/img/brand/life.png',
                'status' => 1,
                'slug' => 'thuong-hieu-life-5',
                'sort' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Satako',
                'logo' => '/img/brand/logo-satako.png',
                'status' => 1,
                'slug' => 'thuong-hieu-satako-6',
                'sort' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thống Nhất',
                'logo' => '/img/brand/logo-thong-nhat.jpg',
                'status' => 1,
                'slug' => 'thuong-hieu-thong-nhat-7',
                'sort' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trinx',
                'logo' => '/img/brand/trinx.jpg',
                'status' => 1,
                'slug' => 'thuong-hieu-trinx-8',
                'sort' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kurashi',
                'logo' => '/img/brand/kurashi.png',
                'status' => 1,
                'slug' => 'thuong-hieu-kurashi-9',
                'sort' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sava',
                'logo' => '/img/brand/sava.png',
                'status' => 1,
                'slug' => 'thuong-hieu-sava-10',
                'sort' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Califa',
                'logo' => '/img/brand/califa.png',
                'status' => 1,
                'slug' => 'thuong-hieu-califa-11',
                'sort' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Calli',
                'logo' => '/img/brand/calli.png',
                'status' => 1,
                'slug' => 'thuong-hieu-calli-12',
                'sort' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Papylus',
                'logo' => '/img/brand/papylus.png',
                'status' => 1,
                'slug' => 'thuong-hieu-papylus-13',
                'sort' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Twitter',
                'logo' => '/img/brand/twitter.png',
                'status' => 1,
                'slug' => 'thuong-hieu-twitter-14',
                'sort' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hector',
                'logo' => '/img/brand/Hector-Photoroom.png',
                'slug' => 'thuong-hieu-hector-photoroom-15',
                'status' => 0,
                'sort' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nesto',
                'logo' => '/img/brand/nesto-Photoroom.png',
                'slug' => 'thuong-hieu-nesto-Photoroom-16',
                'status' => 1,
                'sort' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LIV',
                'logo' => '/img/brand/xe-dap-thuong-hieu-liv.png',
                'slug' => 'thuong-hieu-liv-17',
                'status' => 1,
                'sort' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JEEP',
                'logo' => '/img/brand/Jeep.png',
                'slug' => 'thuong-hieu-jeep-18',
                'status' => 1,
                'sort' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TOTEM',
                'logo' => '/img/brand/totem.png',
                'slug' => 'thuong-hieu-totem-19',
                'status' => 1,
                'sort' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SHIMANO',
                'logo' => '/img/brand/thuong-hieu-shimano.png',
                'slug' => 'thuong-hieu-shimano-20',
                'status' => 1,
                'sort' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
