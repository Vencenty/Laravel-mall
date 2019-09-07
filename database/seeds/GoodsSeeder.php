<?php

use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000; $i++) {
            DB::table('goods')->insert([
                'title' => Str::random(20),
                'desc' => Str::random(200),
                'stock' => rand(0, 10000),
                'thumb' => 'http://' . Str::random(200),
                'max_price' => rand(0, 10000),
                'min_price' => rand(0, 10000),
                'real_price' => rand(0, 1000000),
                'price' => rand(0, 99999),
            ]);
        }
    }
}
