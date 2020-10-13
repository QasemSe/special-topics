<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_code');
            $table->unsignedBigInteger('reports_to')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('extension');
            $table->string('email')->unique();
            $table->string('job_title', 100);

            $table->foreign('office_code')->references('code')->on('offices');
            $table->foreign('reports_to')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
