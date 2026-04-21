<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'last_name' => 'Doe',
                'first_name' => 'John',
                'avatar' => '/img/user/z6279388578470_a5d08d66e01d2090458a0b7316821310.jpg',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password'),
                'phone' => '1234567890',
                'address' => '123 Main St',
                'roles' => 1,
                'gender' => 1,
                'account_lock' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Smith',
                'first_name' => 'Jane',
                'avatar' => '/img/user/z6279388578470_a5d08d66e01d2090458a0b7316821310.jpg',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password'),
                'phone' => '0987654321',
                'address' => '456 Elm St',
                'roles' => 1,
                'gender' => 2,
                'account_lock' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Brown',
                'first_name' => 'Charlie',
                'avatar' => '/img/user/z6279419003055_70de2c6e65298687f704a8a27cb9b351.jpg',
                'email' => 'charlie.brown@example.com',
                'password' => Hash::make('password'),
                'phone' => '1122334455',
                'address' => '789 Oak St',
                'roles' => 1,
                'gender' => 1,
                'account_lock' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Johnson',
                'first_name' => 'Emily',
                'avatar' => '/img/user/z6279419003055_70de2c6e65298687f704a8a27cb9b351.jpg',
                'email' => 'emily.johnson@example.com',
                'password' => Hash::make('password'),
                'phone' => '2233445566',
                'address' => '101 Pine St',
                'roles' => 1,
                'gender' => 2,
                'account_lock' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Williams',
                'first_name' => 'David',
                'avatar' => '/img/user/z6279419003055_70de2c6e65298687f704a8a27cb9b351.jpg',
                'email' => 'david.williams@example.com',
                'password' => Hash::make('password'),
                'phone' => '3344556677',
                'address' => '202 Maple St',
                'roles' => 1,
                'gender' => 1,
                'account_lock' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'nguyễn ',
                'first_name' => 'phước',
                'avatar' => '/img/user/0259.JPG',
                'email' => 'phuocnguyen3214@gmail.com',
                'password' => Hash::make('Phuoc@123456123456'),
                'phone' => '0827505405',
                'address' => 'HCM q11',
                'roles' => 2,
                'gender' => 1,
                'account_lock' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
