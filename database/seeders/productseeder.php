<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productarray = ["auto", "stoel", "tafel"];

        foreach($productarray as $product){
            DB::table('products')->insert([
                'productname' => $product,
                'categoryname' => "huishhouden",
                'description' => "placeholder",
            ]);
        }
    }
}
