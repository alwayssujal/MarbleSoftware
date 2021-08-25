<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number', 100)->unique();
            $table->integer('customer_id');
            $table->string('customer_name', 100)->nullable();
            $table->string('customer_address', 100)->nullable();
            $table->string('customer_contact', 100)->nullable();
            $table->string('customer_email', 100)->nullable();
            $table->dateTime('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('status', 10)->nullable()->default('Unpaid');
            $table->double('sub_total', 15, 2)->nullable()->default(0.00);
            $table->integer('discount_percent')->unsigned()->nullable()->default(0);
            $table->double('discount_amount', 15, 2)->nullable()->default(0.00);
            $table->double('grand_total', 15, 2)->nullable()->default(0.00);
            $table->integer('user_id');
            $table->boolean('isCancelled')->nullable()->default(false);
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
        Schema::dropIfExists('invoice');
    }
}
