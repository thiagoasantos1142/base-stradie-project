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
        Schema::create('due_dilgence', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 995)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('due_dilgence_statuses_id');
            $table->foreign('due_dilgence_statuses_id')->references('id')->on('due_dilgence_statuses')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('due_dilgence');
    }
};
