<?php

use App\Products;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $products =  [
            [
                "cost_per_item" => 3.20,
                "product_name" => "Herbal Tea",
                "quantity" => 100,
                "type" => "Drinks",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                "cost_per_item" => 5.50,
                "product_name" => "Fried Rice",
                "quantity" => 100,
                "type" => "Food",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                "cost_per_item" => 2.00,
                "product_name" => "Ice Cream",
                "quantity" => 100,
                "type" => "Dessert",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                "cost_per_item" => 3.40,
                "product_name" => "Fruity Tea",
                "quantity" => 100,
                "type" => "Drinks",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                "cost_per_item" => 5.50,
                "product_name" => "Fried Mee",
                "quantity" => 100,
                "type" => "Food",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        Products::insert($products);
    }
}
