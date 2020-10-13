<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id('code');
            $table->string('city');
            $table->string('phone', 50); // string is best for phone numbers ( example: +972, 0592-26-221)
            $table->string('first_address');
            $table->string('second_address');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code', 32); // should be string
            $table->string('territory', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
