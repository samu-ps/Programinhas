<!-- 1 - Estrutura PHP -->
<?php




?>

<!-- 1 - Estrutura HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- 2- Editar a estrutura padrão: título, css, ícone -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">
</head>
<body>
    <!-- 3- Criar a DIV e o FORM - body{} -->
    <div class="login">
        <div>SISTEMA DE CONTROLE</div>
        <!-- Criar o formulário -->
        <!-- 3.1 - 3.2, iputs e botões -->
        <form action="autenticar.php" method="POST">
            <img src="./img/login.png" class="logo" width="90px" height="90px" style="margin-bottom: 7px;">
            <input type="text" name="user" placeholder="Usuário" required>
            <input type="password" name="psw" placeholder="* * * * * * *" required>
            <button type="submit">entrar</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>