<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cod_fipe',
        'placa',
        'descricao',
        'ano',
        'modelo',
        'chassi',
        'renavan',
        'ativo',
        'fnd_reserva',
        'tracao',
        'categoria',
        'dt_inclusao',
        'dt_saida'
    ];

}
