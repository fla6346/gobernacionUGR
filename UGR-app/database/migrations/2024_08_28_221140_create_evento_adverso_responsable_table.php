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
        Schema::create('evento_adverso_responsable', function (Blueprint $table) {
            $table->foreignId('idResponsable');
            $table->foreign('idResponsable')->references('idResponsable')->on('responsable')->onDelete('cascade');
            $table->foreignId('idEvento');
            $table->foreign('idEvento')->references('idEvento')->on('evento_adverso')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_adverso_responsable');
    }
};
