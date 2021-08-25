<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->date('date')->nullable();
            $table->double('amount', 15, 2)->nullable()->default(0.00);
            $table->string('mode', 20)->nullable()->default('Cash');
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
        Schema::dropIfExists('invoice_transactions');
    }
}
