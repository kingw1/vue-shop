<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Anim duis do irure culpa cupidatat ex Lorem pariatur occaecat proident qui.',
            'price' => 19.03,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Deserunt aliquip id magna incididunt mollit minim. Commodo aliqua ullamco quis elit nostrud consectetur laboris sint cupidatat laborum. Fugiat laboris eu commodo laboris irure aute est cupidatat laboris dolor id. Nostrud eu consectetur deserunt nisi. Eu dolore anim esse duis. Nulla ad esse velit adipisicing ex velit est pariatur.',
        ]);
    }
}
