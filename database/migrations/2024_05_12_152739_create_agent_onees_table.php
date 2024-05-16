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
        Schema::create('agent_onees', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_AONEE')->primary(); 
            $table->foreign('ID_AONEE')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('ID_SER'); 
            $table->foreign('ID_SER')->references('ID_SERVICE')->on('services')->onDelete('cascade') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_onees');
    }
};
