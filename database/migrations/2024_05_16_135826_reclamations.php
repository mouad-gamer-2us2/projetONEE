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
    Schema::create('reclamations', function (Blueprint $table) {
        $table->id('ID_RECLAMATION');
        $table->text('DESCRIPTION');
        $table->string('URGENCE');
        $table->string('ETAT');
        $table->unsignedBigInteger('ID_CLI');
        $table->unsignedBigInteger('ID_CAT');
        $table->unsignedBigInteger('ID_A_CENTRE');
        $table->unsignedBigInteger('ID_SERV');
        $table->foreign('ID_CLI')->references('NUM_CONTRAT')->on('clients')->onDelete('cascade');
        $table->foreign('ID_CAT')->references('ID_CATEGORIE')->on('categorie_reclamations')->onDelete('cascade');
        $table->foreign('ID_A_CENTRE')->references('ID_ACENTRE')->on('agent_centres')->onDelete('cascade');
        $table->foreign('ID_SERV')->references('ID_SERVICE')->on('services')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
