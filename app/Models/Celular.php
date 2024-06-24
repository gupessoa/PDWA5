<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    use HasFactory;
    protected $fillable = [
        "marca",
        "modelo",
        "ano_lancamento",
        "tamanho_tela",
        "processador"
    ];
}
