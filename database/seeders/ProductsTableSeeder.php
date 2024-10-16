<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Запустите исходные данные базы данных
     */
    public function run(): void
    {
        Product::create([
            
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
            Product::create([
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'stock' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            // Добавьте дополнительные продукты по мере необходимости
            Product::create([
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 39.99,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
    }

