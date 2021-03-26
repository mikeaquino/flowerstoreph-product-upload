<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => Str::random(10),
            'description' => Str::random(10),
            'quantity' => rand(0, 100),
            'price' => rand(0, 100),
            'uploaded_by' => Str::random(10),
            'photo' => 'https://source.unsplash.com/random',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}