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
         Schema::create('reclamation_affectees', function (Blueprint $table) {
            $table->id('ID_RECLAMATION');

            $table->unsignedBigInteger('ID_REC_AFF');
            $table->unsignedBigInteger('ID_A_ONEE');
            $table->foreign('ID_A_ONEE')->references('ID_AONEE')->on('agent_onees');
            $table->foreign('ID_REC_AFF')->references('ID_RECLAMATION')->on('reclamations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamation_affectee');
    }
};
