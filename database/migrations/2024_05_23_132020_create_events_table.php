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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_agent');
            $table->unsignedBigInteger('id_rendezvous');
            $table->dateTime('date_et_heure');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_agent')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_rendezvous')->references('ID_RENDEZ_VOUS')->on('demande_rendez_vouses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
