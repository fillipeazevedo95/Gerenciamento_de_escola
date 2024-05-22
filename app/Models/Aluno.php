<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome', 'data', 'email', 'senha', 'endereco', 'complemento', 'cep', 'cidade', 'anoletivo', 'turma'];
}
