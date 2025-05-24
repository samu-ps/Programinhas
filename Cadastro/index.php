<?php
require_once("./conectar.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cadastro</title>
    <link rel="icon" href="./img/signup.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./estilo/estilo2.css">
</head>
<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
            <div class="text-center mb-4">
                <img src="./img/key.png" alt="Key" width="80" height="80" class="mb-2">
                <h2 class="fw-bold">Entrar</h2>
            </div>
            <form action="./salvando.php" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control text-uppercase" placeholder="Nome de Cadastro" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(00) 00000-0000">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required maxlength="20">
                </div>
                <div class="mb-4">
                    <label for="csenha" class="form-label">Confirmar Senha</label>
                    <input type="password" name="csenha" id="csenha" class="form-control" placeholder="Confirmar senha" required maxlength="20">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a href="./index2.html" class="btn btn-outline-secondary">Já tenho conta. Entrar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="./script/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>