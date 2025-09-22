<!-- 8 - Criar sessão php para identificar o usuário logado -->
<?php

require_once("./conexao.php");
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
    <title>PetShop</title>
    <link rel="stylesheet" href="./styles/principal.css">
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">
    <!-- 11 - Adicionar script JQuery  -->
    <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- 7.2- criar uma DIV (barra de menu) contendo DIV 'usuario' e DIV 'sair' -->
    <div class="menu">
        <!-- Tíulo do sistema -->
        <div class="titulo">PetShop</div>
        <div class="usuario">
            <!-- 8.2 - Exibir o usuário logado -->
            <!-- Abrir seção php dentro do html -->
            <?php echo "Bem vindo, ", $usuario, "!"?>
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

<!-- 10 - scripts para abrir as interfaces em 'conteudo' -->
    <script>
        // carregar a interface, completamente, na memória RAM
        $(document).ready (function(){
            // enviar 'funcionários.php' para a variável de memória quando o botão 'btnFunc for pressionado'
            $('#btnFunc').click(function(){
                // fazer a leitura de 'funcionarios.php' e enviar para 'conteudo'
                $('#conteudo').load('conteudo/funcionarios.php', function(response, status, xhr){
                    // verificar se o 'status' está coreto ou não
                    if(status == "error"){
                        //enviar mensaem de erro para 'conteudo'
                        $('#conteudo').html('<p>Erro ao carregar Funcionários</p>')
                    }
                });
            });

            $('#btnProd').click(function(){
                // fazer a leitura de 'produtos.php' e enviar para 'conteudo'
                $('#conteudo').load('conteudo/produtos.php', function(response, status, xhr){
                    // verificar se o 'status' está coreto ou não
                    if(status == "error"){
                        //enviar mensaem de erro para 'conteudo'
                        $('#conteudo').html('<p>Erro ao carregar Produtos</p>')
                    }
                });
            });

            $('#btnRelat').click(function(){
                // fazer a leitura de 'relatorios.php' e enviar para 'conteudo'
                $('#conteudo').load('conteudo/relatorios.php', function(response, status, xhr){
                    // verificar se o 'status' está coreto ou não
                    if(status == "error"){
                        //enviar mensaem de erro para 'conteudo'
                        $('#conteudo').html('<p>Erro ao carregar Relatórios</p>')
                    }
                });
            });

            $('#btnAdmin').click(function(){
                // fazer a leitura de 'admin.php' e enviar para 'conteudo'
                $('#conteudo').load('conteudo/admin.php', function(response, status, xhr){
                    // verificar se o 'status' está coreto ou não
                    if(status == "error"){
                        //enviar mensaem de erro para 'conteudo'
                        $('#conteudo').html('<p>Erro ao carregar Admin</p>')
                    }
                });
            });
        });
    </script>

    
</body>
</html>

<!-- 7.2 - Criar a barra de usuário -->