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
        Schema::create('due_diligence_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('organizations_id');
            $table->unsignedBigInteger('due_dilgence_id');
            $table->unsignedBigInteger('documents_type_id');
            $table->unsignedBigInteger('documents_status_id');
            $table->string('title', 255);
            $table->string('description', 45)->nullable();
            $table->timestamps();
            $table->string('stored_link', 3000)->nullable();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('organizations_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->foreign('due_dilgence_id')->references('id')->on('due_dilgence')->onDelete('cascade');
            $table->foreign('documents_type_id')->references('id')->on('due_diligence_documents_type')->onDelete('cascade');
            $table->foreign('documents_status_id')->references('id')->on('due_diligence_documents_statusses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('due_diligence_documents');
    }
};
