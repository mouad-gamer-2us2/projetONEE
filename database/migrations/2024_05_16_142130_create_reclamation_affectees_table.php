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
            $table->unsignedBigInteger('ID_REC_AFF')->primary();
            $table->unsignedBigInteger('ID_AONEE_AFF');
            $table->unsignedBigInteger('ID_CLI_AFF');
            $table->unsignedBigInteger('ID_ACENTRE_AFF');
            $table->foreign('ID_REC_AFF')->references('ID_RECLAMATION')->on('reclamations')->onDelete('cascade');
            $table->foreign('ID_AONEE_AFF')->references('ID_AONEE')->on('agent_onees')->onDelete('cascade');
            $table->foreign('ID_CLI_AFF')->references('ID_CLI')->on('reclamations')->onDelete('cascade');
            $table->foreign('ID_ACENTRE_AFF')->references('ID_A_CENTRE')->on('reclamations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamation_affectees');
    }
};
