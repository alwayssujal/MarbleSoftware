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
            $table->string('firstname', 100)->nullable();
            $table->string('middlename', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('contact', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->date('hired_date')->nullable();
            $table->string('address', 100)->nullable();
            $table->integer('employee_category_id');
            $table->boolean('isActive')->nullable()->default(true);
            $table->string('pan', 100)->nullable();
            $table->string('citizenship_number', 100)->nullable();
            $table->integer('salary')->unsigned()->nullable()->default(0);
            $table->date('dob')->nullable();
            $table->timestamps();
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
