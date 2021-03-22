<?php

use Illuminate\Database\Seeder;

use App\Color;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 5) 
            -> make()
            -> each(function($product) {

            $color = Color::inRandomOrder() -> first();
            $product -> color() -> associate($color);
            $product -> save();

        });
    }
}
