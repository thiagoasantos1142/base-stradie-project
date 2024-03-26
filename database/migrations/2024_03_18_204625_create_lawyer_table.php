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
        Schema::create('lawyer', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('OAB_number', 45)->nullable();
            $table->string('UF', 45)->nullable();
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyer');
    }
};
