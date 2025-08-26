<!-- 1 - Estrutura PHP -->
<!-- // 6 - sessão php -->
<?php
// 6.1- sessão de variaveis globais
@session_start();

// 6.2- capturar conteúdo de 'user' e 'psw'
if (isset($_POST['user'])&& isset($_POST['psw'])) {
    $usuario = $_POST['user'];
    $senha = $_POST['psw'];

    // 6.3- autenticação de usuario/senha
    if($usuario == 'samuel' && $senha == '123'){
        // 6.4- enviar o 'usuário' para a sessão de variáveis globais 
        $_SESSION['user'] = $usuario;
        // 6.5 - direcionar para principal.php
        echo'<script>window.location="./principal.php"</script>';
        exit();
    }
    // 6.6 se usuario/senha errado exibe mensagem
    else{
        // exibir mensagem de alerta
        echo '<script>alert("Usuário e/ou senha incorreto")</script>';
    }
}

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
        <!-- 3.1 - 3.2 - 3.3, inputs e botões -->
        <form action="" method="POST">
            <!-- 5 - imagem no form  -->
            <img src="./img/login.png" class="logo">
            <input type="text" name="user" placeholder="Usuário" required>
            <input type="password" name="psw" placeholder="* * * * * * *" required>
            <button type="submit">entrar</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>