<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class associado extends Model
{
    use HasFactory;

    const PESSOA_FISICA = 'cpf';
    const PESSOA_JURIDICA = 'cnpj';

    const ESTADO_CIVIL = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];
    

    protected $fillable = [
    'nome',
    'tipo_associado',
    'cpf_cnpj',
    'ie_rg',
    'orgao_expedidor',
    'dt_expedicao',
    'sexo',
    'estado_civil',
    'dt_nascimento',
    'indicacao',
    'nome_cobranca',
    'logradouro',
    'numero',
    'bairro',
    'cidade',
    'uf',
    'cep',
    'telefone',
    'celular',
    'email',
    'protesta_titulo',
    'rateio_bloqueado',
    'dt_saida'];


    public static function getAssociadoType($type)
        {
            return $type == \App\Models\Associado::PESSOA_FISICA ? $type : Associado::PESSOA_JURIDICA;
        }
}
