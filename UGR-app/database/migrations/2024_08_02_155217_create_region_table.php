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
        Schema::create('region', function (Blueprint $table) {
            $table->id('idRegion');
            //$table->unsignedBigInteger('idEvento');
            //$table->foreign('idEvento')->references('idEvento')->on('evento_adverso')->onDelete('cascade');
            $table->string('nombreRegion');
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region');
    }
};
