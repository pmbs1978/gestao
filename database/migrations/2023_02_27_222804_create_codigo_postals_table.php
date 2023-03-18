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
        Schema::create('codigo_postals', function (Blueprint $table) {
            $table->id();
            $table->string('nome_localidade', 100);
            $table->string('arteria_tipo', 20)->nullable();
            $table->string('primeira_preposicao', 20)->nullable();
            $table->string('arteria_titulo', 20)->nullable();
            $table->string('segunda_preposicao', 100)->nullable();
            $table->string('arteria_designacao', 100)->nullable();
            $table->string('arteria_local_zona', 100)->nullable();
            $table->string('cp4', 20);
            $table->string('cp3', 20);
            $table->string('designacao_postal', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codigo_postals');
    }
};
