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
        Schema::create('demande_rendez_vous', function (Blueprint $table) {
            $table->id('ID_RENDEZ_VOUS');
            $table->text('INFORMATION_RENDEZ_VOUS');
            $table->unsignedBigInteger('ID_A_CENTRE');
            $table->unsignedBigInteger('ID_SER');
            $table->unsignedBigInteger('ID_CLI');
            $table->foreign('ID_A_CENTRE')->references('ID_ACENTRE')->on('agent_centres')->onDelete('cascade');
            $table->foreign('ID_SER')->references('ID_SERVICE')->on('services')->onDelete('cascade');
            $table->foreign('ID_CLI')->references('NUM_CONTRAT')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_rendez_vous');
    }
};
