<?php

use Illuminate\Database\Seeder;
use App\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Office::class, 10)->create();
    }
}
