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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->unsignedBigInteger('organizations_id');            
            $table->unsignedBigInteger('user_id');
            $table->decimal('value', 16, 2)->nullable();
            $table->date('offer_date')->nullable();
            $table->date('offer_deadline')->nullable();
            $table->unsignedBigInteger('offer_status_id')->nullable();
            $table->integer('installments')->nullable();
            $table->unsignedBigInteger('offer_category_id');
            $table->unsignedBigInteger('offer_statuses_id');
            $table->unsignedBigInteger('available_assets_id');
            $table->timestamps();
            
            $table->foreign('organizations_id')->references('id')->on('organizations')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('offer_category_id')->references('id')->on('offer_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('offer_statuses_id')->references('id')->on('offer_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('available_assets_id')->references('id')->on('available_assets')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
