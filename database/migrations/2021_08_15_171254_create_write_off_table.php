<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWriteOffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('write_off', function (Blueprint $table) {
            $table->id();
            $table->integer('good_receive_id');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->dateTime('write_off_date');
            $table->string('write_off_date_nepali');
            $table->integer('entered_by_user_id');
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
        Schema::dropIfExists('write_off');
    }
}
