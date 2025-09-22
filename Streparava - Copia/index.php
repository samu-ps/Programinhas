<!-- 7 - estrutura do PHP -->
<?php
    // 7.1 - Criar uma sessão de variáveis
    @session_start();

    // 7.2 - Verificar se o POST foi realizado
    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        // 7.3 - Verificar se o usuário e senha estão corretos:
            // como:
            // Criar variáveis de memória local para comparar os conteúdos:
            $usr = $_POST['usuario'];
            $pwd = $_POST['senha'];
            if($usr == 'alessandro' && $pwd =='123'){
            //    5.1 - Armazenar a variável $usr na sessão de variáveis
               $_SESSION['usuario'] = $usr;
                // direcionar para principal.php
                echo '<script>window.location="./principal.php"</script>';
            }
            // se incorreto:
            else{
                // enviar mensagem informando usuário e senha incorreto
                echo '<script>alert("Usuário ou senha incorreto")</script>';
            }

    }
?>
<!-- 1 - Abrir a estrutura padrão HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 2 - Editar estrutura padrão: titulo, css, icone -->
    <title>:.Login.:</title>
    <link rel="stylesheet" href="./estilo/index.css">
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">
</head>
<body>
    <!-- 3 - Criar a DIV e o FORM no body -->
    <div class="form">
        <!-- 6 - Adicionar o method="POST" ao 'form' -->
        <form  action="" method="POST">
            <!-- 5 - Adicionar uma imagem ao 'form' -->
            <img src="./img/streparava.png" class="logo" alt="">
            <!-- 3.1 - Criar inputs para receber usuário e senha -->
            <input type="text" name="usuario" placeholder="seu usuário" required>
            <input type="password" name="senha" placeholder="* * * * *" required>
            <!-- 3.2 - Criar os botões para validar usuário e senha -->
            <button type="submit">Login</button>
        </form>
    </div>    
</body>
</html>






































