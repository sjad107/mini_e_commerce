<?php

namespace Database\Seeders;

use App\Models\Cart_Items;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cart_Items::factory()->count(150)->create();
    }
}
