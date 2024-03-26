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
        Schema::create('Users_purchase_sales_agreements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_sales_agreement_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('purchase_sales_agreement_id', 'fk_user_psa_agreement_id')
                  ->references('id')
                  ->on('purchase_sales_agreements')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_purchase_sales_agreements');
    }
};
