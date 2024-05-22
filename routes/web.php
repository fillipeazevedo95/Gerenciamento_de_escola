<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Aluno;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_aluno', function () {
    return view('cadastro_aluno');
});

 Route::post('/cadastrar_aluno', function (Request $cadastro_aluno) {
    $senha = $cadastro_aluno->senha;
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
    Aluno::create([
        'nome' => $cadastro_aluno->nome, 
        'data' => $cadastro_aluno->data, 
        'email' => $cadastro_aluno->email, 
        'senha' => $senha_cripto, 
        'endereco' => $cadastro_aluno->endereco, 
        'complemento' => $cadastro_aluno->complemento, 
        'cep' => $cadastro_aluno->cep, 
        'cidade' => $cadastro_aluno->cidade, 
        'anoletivo' => $cadastro_aluno->anoletivo, 
        'turma' => $cadastro_aluno->turma
    ]);
       
    echo "<div>
            <h1>Aluno cadastrado com sucesso!<h1>
            <button><a href=/>voltar</a></button>
        </div>";
});

#Recuperando senha
#password_verify('senha do banco', $senha_cripto);