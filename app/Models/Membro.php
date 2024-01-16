<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'celular',
        'idade',
        'endereco',
        'email',
        'bairro',
        'condicao',
        'grupo',
        'foto',
        'observacao'
    ];
}
