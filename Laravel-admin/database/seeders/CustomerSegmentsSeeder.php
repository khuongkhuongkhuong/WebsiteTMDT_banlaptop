<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSegmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer_segments')->insert([
            [
                'name' => 'Học sinh'
            ],
            [
                'name' => 'Game'
            ],
            [
                'name' => 'Văn phòng'
            ],
            [
                'name' => 'Sang trọng'
            ],
        ]);
        //

    }
}
