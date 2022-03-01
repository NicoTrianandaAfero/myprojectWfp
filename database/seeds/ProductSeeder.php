<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name_product' => 'paracetamol',
            'price' =>200000,
        ]);
         
    }
}
