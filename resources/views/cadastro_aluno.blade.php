<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Aluno</title>

    <!-- CSS BOOTSTRAP & JS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro Aluno</h1>
                <form class="row g-3" action="/cadastrar_aluno" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="col-md-4">
                        <label for="data" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data" required>
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-4">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" required>
                    </div>
                    <div class="col-12">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" placeholder="Travessa Cleto Campelo, 284" name="endereco" required>
                    </div>
                    <div class="col-md-9">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complemento" required>
                    </div>
                    <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" name="cep" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" name="cidade" required>
                    </div>
                    <div class="col-md-4">
                        <label for="anoletivo" class="form-label">Ano Letivo</label>
                        <select class="form-select" name="anoletivo" required>
                            <option value="" selected>Selecione seu Ano Letivo</option>
                            <option value="1° Ano - Ensino Fundamental">Segundo Ano - Ensino Fundamental</option>
                            <option value="2° Ano - Fundamental">Primeiro Ano - Fundamental</option>
                            <option value="3° Ano - Ensino Fundamental">Terceiro Ano - Ensino Fundamental</option>
                            <option value="4° Ano - Ensino Fundamental">Quarto Ano - Ensino Fundamental</option>
                            <option value="5° Ano - Ensino Fundamental">Quinto Ano - Ensino Fundamental</option>
                            <option value="6° Ano - Ensino Fundamental">Sexto Ano - Ensino Fundamental</option>
                            <option value="7° Ano - Ensino Fundamental">Setimo Ano - Ensino Fundamental</option>
                            <option value="8° Ano - Ensino Fundamental">Oitavo Ano - Ensino Fundamental</option>
                            <option value="9° Ano - Ensino Fundamental">Nono Ano - Ensino Fundamental</option>
                            <option value="1° Ano - Ensino Médio">Primeiro Ano - Ensino Médio</option>
                            <option value="2° Ano - Ensino Médio">Segundo Ano - Ensino Médio</option>
                            <option value="3° Ano - Ensino Médio">Terceiro Ano - Ensino Médio</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="turma" class="form-label">Turma</label>
                        <select class="form-select" name="turma" required>
                            <option value="" selected>-</option>
                            <option value="A"> A </option>
                            <option value="B"> B </option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>