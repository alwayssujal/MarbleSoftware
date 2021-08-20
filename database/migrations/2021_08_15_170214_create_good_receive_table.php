<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodReceiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_receive', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_item_id');
            $table->integer('item_id');
            $table->integer('received_by_user_id');
            $table->integer('supplier_id');
            $table->integer('ordered_quantity');
            $table->integer('received_quantity');
            $table->double('rate');
            $table->integer('discount');
            $table->double('discount_amount');
            $table->double('charge');
            $table->double('total_amount');
            $table->dateTime('received_date');
            $table->string('received_date_nepali');
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
        Schema::dropIfExists('good_receive');
    }
}
