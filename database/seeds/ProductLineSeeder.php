<?php

use App\ProductLine;
use Illuminate\Database\Seeder;

class ProductLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductLine::class, 10)->create();
    }
}
