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
        Schema::create('purchase_sales_agreements', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
            $table->string('link_document', 955)->nullable();
            $table->unsignedBigInteger('offers_id');

            $table->foreign('Offers_id')->references('id')->on('offers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_sales_agreements');
    }
};
