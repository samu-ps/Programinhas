<!-- Sistema para automatiza preenchimento -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automação</title>
    <link rel="icon" href="img/online-jewelry.png">
    <link rel="stylesheet" href="css/estilos1.css">    
</head>
    <body>
        <!-- 1 Criar a div principal -->
        <div class="usuario">
            <div class="form">
                <!-- adicionar imagem de login -->
                <img src="./img/login.png" alt="Imagem de login" class="loginimg">
                <form>
                    <!-- Criar o input para nome do usuário -->
                    <input type="text" name="usuario" placeholder="Digite seu Nome Completo" required>
                    <!-- Criar o input para o Telefone do usuário -->
                    <input type="text" name="telefone" placeholder="(00)00000-0000" required>
                    <!-- Criar o input para Senha do usuário -->
                    <input type="password" name="senha" placeholder="Digite sua Senha" required>
                    <button>Login</button>
                </form>
            </div>
        </div>
    </body>
</html>