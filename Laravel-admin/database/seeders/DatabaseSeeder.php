<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            DiscountSeeder::class,
            BannerSeeder::class,
            CustomerSegmentsSeeder::class,
            MainCategorySeeder::class,
            // ProductCategorySeeder::class,
            SubCategorySeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            ProductVariantSeeder::class,
            ProductCustomerSegmentSeeder::class,
            RelateProductSeeder::class,
            ImgProductsSeeder::class,
            UserSeeder::class,
            FavoriteProductsSeeder::class,
            UserReviewSeeder::class,
            AttributeProduct::class,
            // CouponsSeeder::class,
            CommentsSeeder::class,
            PostCategorySeeder::class,
            PostSeeder::class,
            PaymentsSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,

        ]);
    }
}
