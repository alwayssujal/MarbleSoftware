<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->string('name', 100)->nullable();
            $table->integer('tax_percent')->unsigned()->nullable()->default(0);
            $table->double('tax_amount', 15, 2)->nullable()->default(0.00);
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
        Schema::dropIfExists('invoice_taxes');
    }
}
