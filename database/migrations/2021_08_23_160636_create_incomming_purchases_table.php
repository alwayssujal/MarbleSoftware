<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncommingPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomming_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_number', 100)->unique();
            $table->integer('user_id');
            $table->integer('item_id');
            $table->integer('supplier_id');
            $table->integer('quantity')->unsigned()->nullable()->default(1);
            $table->double('rate', 10, 2)->nullable()->default(0.00);
            $table->double('sub_total', 10, 2)->nullable()->default(0.00);
            $table->integer('tax')->unsigned()->nullable()->default(0);
            $table->double('tax_amount', 5, 2)->nullable()->default(0.00);
            $table->double('extra_charges', 5, 2)->nullable()->default(0.00);
            $table->integer('discount')->nullable()->default(0);
            $table->double('discount_amount', 5, 2)->nullable()->default(0.00);
            $table->double('grand_total', 10, 2)->nullable()->default(0.00);
            $table->dateTime('purchase_date')->nullable();
            $table->longText('remarks')->nullable()->default('Purchases');
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
        Schema::dropIfExists('incomming_purchases');
    }
}
