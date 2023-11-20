<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart_Items;
use App\Models\Items;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CustomersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call([ItemsSeeder::class]);
        $this->call(CartsSeeder::class);
        $this->call(CartItemsSeeder::class);
    }
}
