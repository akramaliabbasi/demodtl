<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::factory()->create();

        Product::factory()->create([
            'name' => 'Default Product',
            'price' => 10.99,
            'status' => 'active',
            'type' => 'item',
            'user_id' => $user->id,
        ]);
    }
}
