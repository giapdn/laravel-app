<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Macbook",
            "price" => 19999999
        ]);

        Product::create([
            "name" => "Dell",
            "price" => 20000000
        ]);
    }
}
