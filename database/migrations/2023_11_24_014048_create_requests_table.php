<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('sales_personnel');
            $table->string('organization');
            $table->string('ms_licence');
            $table->integer('ms_unit');
            $table->string('kaspersky_licence');
            $table->integer('kaspersky_unit');
            $table->string('quotation_number');
            $table->string('lpo_number');
            $table->string('receipt_number');
            $table->string('invoice_number');
            $table->string('customer_personnel');
            $table->string('note');
            $table->decimal('payment_method');
            $table->date('date_of_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
