<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Apple'
        ]);

        Product::create([
            'name' => 'Banana'
        ]);

        Product::create([
            'name' => 'Coconut'
        ]);

        Product::create([
            'name' => 'Duster'
        ]);

        Product::create([
            'name' => 'Egg'
        ]);

        Product::create([
            'name' => 'Fish'
        ]);

    }
}
