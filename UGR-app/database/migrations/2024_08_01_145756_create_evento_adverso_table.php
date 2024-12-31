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
        Schema::create('evento_adverso', function (Blueprint $table) {
            $table->id('idEvento');
            //$table->unsignedBigInteger('idPunto');
            $table->unsignedBigInteger('idAlerta');
            //$table->foreign('idAlerta')->references('idAlerta')->on('alerta')->onDelete('cascade');

          //  $table->foreign('idResponsable')->references('idResponsable')->on('responsable')->onDelete('cascade');
            $table->unsignedBigInteger('idRegion');
           // $table->foreign('idRegion')->references('idRegion')->on('region')->onDelete('cascade');

            $table->string('area');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('fecha_inicio');
            $table->string('fecha_finalizacion');
            $table->time('hora');
            $table->string('descripcion');
           // $table->foreign('idPunto')->references('idPunto')->cascadaOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_adverso');
    }
};
