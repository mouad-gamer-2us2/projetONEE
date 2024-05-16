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
        Schema::create('reclamation_traitees', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_REC_TRAITEE')->primary();
            $table->text('PROCEDURE');
            $table->foreign('ID_REC_TRAITEE')->references('ID_REC_AFF')->on('reclamation_affectees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamation_traitees');
    }
};
