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
        Schema::create('available_assets', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->foreignId('due_dilgence_id')->constrained('due_dilgence');
            $table->string('process_number', 45)->nullable();
            $table->decimal('nominal_value_title', 16, 2)->nullable()->comment('Valor total do título');
            $table->decimal('updated_value', 16, 2)->nullable();
            $table->decimal('negotiated_value', 16, 2)->nullable();
            $table->tinyInteger('highlighted_contractual_fee')->nullable();
            $table->tinyInteger('contractual_fees_for_sale')->nullable();
            $table->tinyInteger('main_credit_for_sale')->nullable();
            $table->decimal('percentage_contractual_fee')->nullable();
            $table->date('updated_value_date')->nullable();
            $table->timestamps();
    
            // Adicionando índice à coluna 'due_dilgence_id'
            $table->index('due_dilgence_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_assets');
    }
};
