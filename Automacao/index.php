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
                <img src="./img/login.png" alt="Imagem de login" class="loginimg">
                <form>
                    <p>Nome Completo</p>
                    <input type="text" name="usuario" placeholder="Digite seu Nome Completo" required>
                    <p>Número de Telefone</p>
                    <input type="text" id="telefone" name="telefone" placeholder="(00)00000-0000" required>
                    <p>Senha</p>
                    <input type="password" name="senha" placeholder="Digite sua Senha" required>
                    <button>Login</button>
                </form>
            </div>
        </div>
    </body>
    <script>
        document.getElementById('telefone').addEventListener('input',function (e) {
            let value=e.target.value.replace(/\D/g,''); // Remove letras

            if (value.length>11) {
                value=value.slice(0,11); // 11 dígitos
            }
            // Máscara nos números
            value=value.replace(/^(\d{2})(\d)/, '($1) $2');
            value=value.replace(/^(\(\d{2}\) )(\d{5})(\d)/, '$1$2-$3');
            
            e.target.value = value;
            });
    </script>
</html>