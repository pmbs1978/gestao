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
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('genero', 30);
            $table->timestamps();
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_genero_id_foreign');
        });

        Schema::dropIfExists('generos');
    }
};
