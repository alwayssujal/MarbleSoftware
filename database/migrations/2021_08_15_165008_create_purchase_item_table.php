<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_item', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_number');
            $table->integer('ordered_by_user_id');
            $table->integer('item_id');
            $table->integer('supplier_id');
            $table->integer('quantity');
            $table->double('rate');
            $table->integer('discount');
            $table->double('discount_amount');
            $table->double('charge');
            $table->double('total_amount');
            $table->dateTime('ordered_date');
            $table->string('order_date_nepali');
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
        Schema::dropIfExists('purchase_item');
    }
}
