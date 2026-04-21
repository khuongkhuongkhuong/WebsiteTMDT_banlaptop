<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('main_categories')->insert([
            [
                'name' => 'TMDT'
            ],
            [
                'name' => 'Phụ kiện'
            ],
            [
                'name' => 'Phụ tùng'
            ],

        ]);
    }
}
