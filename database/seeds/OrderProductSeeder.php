<?php

use Illuminate\Database\Seeder;
use App\OrderProduct;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrderProduct::class, 10)->create();
    }
}
