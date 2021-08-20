<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnedToSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returned_to_supplier', function (Blueprint $table) {
            $table->id();
            $table->integer('good_receive_id');
            $table->integer('item_id');
            $table->integer('returned_by_user_id');
            $table->integer('supplier_id');
            $table->integer('quantity');
            $table->double('rate');
            $table->double('total_amount');
            $table->dateTime('returned_date');
            $table->string('returned_date_nepali');
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
        Schema::dropIfExists('returned_to_supplier');
    }
}
