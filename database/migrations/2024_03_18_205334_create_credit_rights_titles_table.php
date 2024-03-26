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
        Schema::create('credit_rights_titles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courts_id')->constrained('courts');
            $table->foreignId('species_id')->constrained('species');
            $table->foreignId('nature_credits_id')->constrained('nature_credits');
            $table->foreignId('nature_obligations_id')->constrained('nature_obligations');
            $table->foreignId('Origin_debtors_id')->constrained('Origin_debtors');
            $table->string('process_number', 255);
            $table->date('distribution_date')->nullable();
            $table->string('lawsuit_class', 45)->nullable();
            $table->string('lawsuit_subjects', 45)->nullable();
            $table->string('lawsuit_reference', 45)->nullable();
            $table->tinyInteger('justice_secret')->nullable();
            $table->tinyInteger('justice_free')->nullable();
            $table->string('urgent_request', 45)->nullable();
            $table->string('provision', 45)->nullable();
            $table->string('beneficiary', 45)->nullable();
            $table->decimal('principal_amount', 16, 2)->nullable();
            $table->string('interest', 45)->nullable();
            $table->string('interest_compensation', 45)->nullable();
            $table->string('legal_charge', 45)->nullable();
            $table->string('legal_percentage', 45)->nullable();
            $table->string('legal_preference', 45)->nullable();
            $table->string('server_condition', 45)->nullable();
            $table->string('allocation_department', 45)->nullable();
            $table->decimal('nominal_value_title', 16, 2)->nullable();
            $table->decimal('contractual_fee', 16, 2)->nullable();
            $table->string('justification', 955)->nullable();
            $table->date('registration_date')->nullable();
            $table->string('IR_percentage_provision', 45)->nullable();
            $table->string('creditor_name', 45)->nullable();
            $table->string('registered_credit_rights_titlescol', 45)->nullable();
            $table->string('creditor_cpf_cnpj', 45)->nullable();
            $table->string('debtor_cpf_cnpj', 45)->nullable();
            $table->string('legal_incidents', 45)->nullable();
            $table->string('previous_exercise_parcel_quantity', 45)->nullable();
            $table->string('previous_exercise_values_total', 45)->nullable();
            $table->string('ir_deduction_base_calculation', 45)->nullable();
            $table->date('knowledge_filing_date')->nullable();
            $table->date('knowledge_judgment_date')->nullable();
            $table->date('execution_embargoes_judgment_date')->nullable();
            $table->date('deadline_date_concordance_value_requested')->nullable();
            $table->date('signature_date')->nullable();
            $table->decimal('FGTS_Value', 16, 2)->nullable();
            $table->string('PSS', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_rights_titles');
    }
};
