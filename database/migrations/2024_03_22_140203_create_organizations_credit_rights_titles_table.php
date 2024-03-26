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
        Schema::create('organizations_credit_rights_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organizations_id');
            $table->unsignedBigInteger('credit_rights_titles_id');
            $table->foreign('organizations_id')->references('id')->on('organizations')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('credit_rights_titles_id', 'org_crt_crt_fk')->references('id')->on('credit_rights_titles')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations_credit_rights_titles');
    }
};
