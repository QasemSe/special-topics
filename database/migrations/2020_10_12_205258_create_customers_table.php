<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_rep_employee_num');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone', 50);
            $table->string('first_address');
            $table->string('second_address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code', 32);
            $table->string('country');
            $table->bigInteger('credit_limit');

            $table->foreign('sales_rep_employee_num')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
