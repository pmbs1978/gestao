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
        Schema::create('paises', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 3);
            $table->string('indicativo_telefonico', 4);
            $table->string('iso', 10);
            $table->string('iso3', 10);
            $table->string('nome', 100);
            $table->string('nomeFormal', 220);
            $table->timestamps();
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('nacionalidade_id')->references('id')->on('paises')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_nacionalidade_id_foreign');
        });

        Schema::dropIfExists('paises');
    }
};
