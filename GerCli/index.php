<!-- 4 - fazer conexão ao arquivo conexão.php -->
<?php
    require_once("./conexao.php"); 
    //criar uma sessão para compartilhamento das variáveis de memória
    @session_start();
?>
<!-- 1 - Criar a estrutura html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto GerCli</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="login">
        <div class="form">
            <img src="./img/usera.png" alt="Login" width="130px" height="130px">
            <!-- imagem -->
            <!-- 5 - configurar o 'action' e o POST do form -->
            <form action="autenticar.php" method="POST">
                <br>
                <!-- 2 - input de login e senha  -->
                <label for="usuario">Seu Usuário</label>
                <input type="text" name="usuario" required>
                <label for="senha">Sua Senha</label>
                <input type="password" name="senha" required>
                <!-- 3 - button Entrar -->
                <button>Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>

