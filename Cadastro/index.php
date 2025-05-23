<!-- A fazer: -->
<?php

require_once("./conectar.php");

?>
<!-- Nome, CPF, Telefone, Endereço completo senha, confirmar senha, botões salvar e cancelar,  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cadastro</title>
    <link rel="icon" href="./img/signup.png" type="image/x-icon">
    <link rel="stylesheet" href="./estilo/estilo2.css">
</head>
<body>
    <div class="usuario">
        <div class="formulario">
            <h2>Criar Conta</h2>
            <img src="./img/key.png" alt="Key" width="90px" height="90px">
            <form action="./salvando.php" method="POST"">
                <div class="secao-container">
                    <div class="secao"> 
                        <h3>Seção de Dados</h3>
                        <p>Nome</p>
                        <input type="text" name="nome" class="Nome" placeholder="Nome de Cadastro" style="text-transform: uppercase;" required> 
                        <p>CPF</p>
                        <input type="text" id="cpf" name="cpf" placeholder="[000.000.000-00]" required>
                        <p>Telefone Para Contato</p>
                        <input type="text" id="telefone" name="telefone" placeholder="[(00) 00000-0000]">
                        <p>Senha</p>
                        <input type="password" class="senha" name="senha" placeholder="Senha" required>
                        <p>Confirmar Senha</p>
                        <input type="password" class="csenha" placeholder="Confirmar senha" required>
                    </div>
                </div>
                <button type="submit" class="confirm">Cadastrar</button>
            </form>
            <p><a href="./index2.html">Já tenho conta. Entrar</a></p>
        </div>
    </div>
    <script src="./script/scripts.js" defer></script>
</body>
</html>