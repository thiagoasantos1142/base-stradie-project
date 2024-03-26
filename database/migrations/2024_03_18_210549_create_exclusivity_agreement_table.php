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
        Schema::create('exclusivity_agreement', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
            $table->string('link_document', 955)->nullable();
            $table->unsignedBigInteger('credit_rights_titles_id');

            $table->foreign('credit_rights_titles_id')->references('id')->on('credit_rights_titles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exclusivity_agreement');
    }
};
