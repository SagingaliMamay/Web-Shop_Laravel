<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 11; $i++)
        DB::table('productss')->insert([
            'title' => 'Product '.$i,
            'price' => rand(200,1500),
            'in_stock' => 1,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in pharetra nibh, et cursus massa. Nam feugiat leo quis pellentesque tincidunt. Cras a dignissim metus. Sed libero turpis, eleifend ut urna a, laoreet sollicitudin eros. Nam eu ex vel lorem dictum bibendum vitae quis lectus. Nam faucibus scelerisque tortor et hendrerit. Aenean vestibulum nibh ex, ullamcorper volutpat massa ullamcorper nec.' ,
            'new_price' => rand(100,199),
        ]);
    }
}
