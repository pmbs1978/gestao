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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->integer('nif');
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->unsignedBigInteger('estado_civil_id')->nullable();
            $table->string('residencia', 220)->nullable();
            $table->string('numero_porta', 25)->nullable();
            $table->string('codigo_postal', 15)->nullable();
            $table->string('localidade_residencia', 100)->nullable();
            $table->string('distrito_residencia', 100)->nullable();
            $table->string('concelho_residencia', 100)->nullable();
            $table->string('freguesia_residencia', 220)->nullable();
            $table->string('residencia_fregusia_manual', 220)->nullable();
            $table->unsignedBigInteger('nacionalidade_id')->nullable();
            $table->string('distrito_naturalidade', 100)->nullable();
            $table->string('concelho_naturalidade', 100)->nullable();
            $table->string('freguesia_naturalidade', 220)->nullable();
            $table->string('naturalidade_fregusia_manual', 220)->nullable();
            $table->string('cc_numero', 25)->nullable();
            $table->date('cc_data_emissao')->nullable();
            $table->string('cc_emissor', 50)->nullable();
            $table->string('passaporte_numero', 25)->nullable();
            $table->date('passaporte_data_emissao')->nullable();
            $table->string('passaporte_observacoes', 150)->nullable();
            $table->string('localidade_eleitor', 100)->nullable();
            $table->string('numero_s_social', 25)->nullable();
            $table->string('numero_c_g_aposentacoes', 25)->nullable();
            $table->string('numero_utente', 25)->nullable();
            $table->string('nome_pai', 150)->nullable();
            $table->string('nome_mae', 150)->nullable();
            $table->string('telefone1', 25)->nullable();
            $table->string('telefone2', 25)->nullable();
            $table->string('telefone3', 25)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('profissao', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
