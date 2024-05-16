<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'BMW',
                'price' => 1900,
                'quantity' => 10
            ],
            [
                'name' => 'Volvo',
                'price' => 2400.50,
                'quantity' => 50,

            ],
        ];
        foreach ($products as  $productData){
            Product::create($productData);
        }
    }
}
