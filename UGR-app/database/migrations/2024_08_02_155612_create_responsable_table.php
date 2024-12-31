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
        Schema::create('responsable', function (Blueprint $table) {
            $table->id('idResponsable');
           // $table->unsignedBigInteger('idEvento');
          //  $table->foreign('idEvento')->references('idEvento')->on('evento_adverso')->onDelete('cascade');
            $table->string('nombreResponsable');
            $table->string('unidad');
            $table->string('cargo');
            $table->string('correo');
            $table->string('direccion');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsable');
    }
};
