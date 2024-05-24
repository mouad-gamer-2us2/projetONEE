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
        Schema::create('reclamation_traitee', function (Blueprint $table) {
            $table->bigInteger('ID_RECLAMATION')->primary();
            $table->string('CLIENT');
            $table->string('AGENT_CENTRE');
            $table->string('CATEGORIE_RECLAMATION');
            $table->string('SERVICE_RESPONSABLE');
            $table->string('DESCRIPTION');
            $table->string('PROCEDURE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamation_traitee');
    }
};
