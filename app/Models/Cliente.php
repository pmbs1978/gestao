<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'nif',
        'genero_id',
        'data_nascimento',
        'estado_civil_id',
        'residencia',
        'numero_porta',
        'codigo_postal',
        'localidade_residencia',
        'distrito_residencia',
        'concelho_residencia',
        'freguesia_residencia',
        'residencia_fregusia_manual',
        'nacionalidade_id',
        'distrito_naturalidade',
        'concelho_naturalidade',
        'freguesia_naturalidade',
        'naturalidade_fregusia_manual',
        'cc_numero',
        'cc_data_emissao',
        'cc_emissor',
        'passaporte_numero',
        'passaporte_data_emissao',
        'passaporte_observacoes',
        'localidade_eleitor',
        'numero_s_social',
        'numero_c_g_aposentacoes',
        'numero_utente',
        'nome_pai',
        'nome_mae',
        'telefone1',
        'telefone2',
        'telefone3',
        'email',
        'profissao'
    ];
}
