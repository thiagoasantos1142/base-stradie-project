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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->unsignedBigInteger('payment_type')->nullable();
            $table->unsignedBigInteger('payment_status_id')->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('value', 16, 2)->nullable();
            $table->string('link_pagamento', 255)->nullable();
            $table->date('due_date')->nullable();
            $table->unsignedBigInteger('payment_category_id');
            $table->unsignedBigInteger('payment_gateway_id')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('purchase_sales_agreements_Offers_id');
            $table->unsignedBigInteger('payment_types_id');

            $table->foreign('purchase_sales_agreements_Offers_id')->references('id')->on('purchase_sales_agreements')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_category_id')->references('id')->on('payment_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_status_id')->references('id')->on('payment_statusses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_types_id')->references('id')->on('payment_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
