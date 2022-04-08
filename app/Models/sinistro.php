<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinistro extends Model
{
    use HasFactory;

    protected $fillable = [
        'veiculo_1',
        'veiculo_2',
        'veiculos_3',
        'dt_sinistro',
        'num_bo',
        'ocorrencia',
        'responsavel',
        'observacao',
        'localidade',
        'vl_veiculo',
        'vl_carroceria',
        'orcamento_prev',
        'custo_transporte',
        'custos_extras',
        'franquia',
        'salvados',
        'oficina',
        'descricao',
        'dt_cobranca',
        'parcelas'
    ];
}
