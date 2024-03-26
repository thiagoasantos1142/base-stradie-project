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
        Schema::create('User_ExclusivityAgreements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exclusivity_agreement_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('exclusivity_agreement_id')->references('id')->on('exclusivity_agreement')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_exclusivity_agreements');
    }
};
