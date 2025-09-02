<!-- 8 - Criar sessão php para identificar o usuário logado -->
<?php

// 8.1 - Recuperar o usuário logado
session_start();

// Verificar se a variável 'user' possui conteúdo
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}

$usuario = $_SESSION['user'];
// echo $usuario;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streparava</title>
    <link rel="stylesheet" href="./styles/principal.css">
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">
</head>
<body>
    <!-- 7.2- criar uma DIV (barra de menu) contendo DIV 'usuario' e DIV 'sair' -->
    <div class="menu">
        <!-- Tíulo do sistema -->
        <div class="titulo">Tambor de Freio</div>
        <div class="usuario">
            <!-- 8.2 - Exibir o usuário logado -->
            <!-- Abrir seção php dentro do html -->
            <?php echo $usuario ?>
            <!-- 8.3 - botão para logout -->
            <form action="sair.php" method="POST">
                <button type="submit" class="btnSair"><img src="./img/logout.png" class="imgSair"></button>
                
            </form>
        </div>
    </div>
    <!-- 7.3 - Botões de Navegação -->
    <div class="opcoes">
        <button id="btnFunc">Funcionário</button>
        <button id="btnProd">Produtos</button>
        <button id="btnRelat">Relatórios</button>
        <button id="btnAdm">Admin</button>
    </div>
    <!-- 7.4 - Área de conteúdos -->
    <div id="conteudo"></div>
</body>
</html>

<!-- 7.2 - Criar a barra de usuário -->