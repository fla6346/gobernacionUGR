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
        Schema::create('comunidad', function (Blueprint $table) {
            $table->id('idComunidad');
            $table->string('nombreComunidad');
            $table->string('localidad');
            $table->string('latitud');
            $table->string('longitud');
            $table->unsignedBigInteger('idMunicipio');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('municipio')->onDelete('cascade');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunidad');
    }
};
