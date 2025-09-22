<?php
    // Inicia a sessão
    @session_start();

    // Se não existir usuário logado, redireciona para index.php
    if(!isset($_SESSION['usuario'])){
        echo '<script>window.location="./index.php"</script>';
        exit();
    }

    // Recupera o nome do usuário logado
    $nomeUsuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>:.PetShop.:</title>
    <!-- Estilo principal -->
    <link rel="stylesheet" href="./estilo/principal.css">
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">

    <!-- Biblioteca para leitura de QRCode -->
    <script src="https://unpkg.com/html5-qrcode"></script>

    <!-- jQuery para manipulação dinâmica do DOM e Ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSS extra para layout do sistema -->
    <style>
        .menu {
            display: flex; /* coloca menu e usuário lado a lado */
            justify-content: space-between; /* espaço entre os dois lados */
            padding: 10px;
            background: #eee;
        }
        .opcoes {
            margin: 20px;
        }
        #conteudo {
            margin: 20px;
            min-height: 350px; /* altura mínima para a área de conteúdo */
        }
    </style>
</head>
<body>
    <!-- Barra do menu superior -->
    <div class="menu">
        <!-- Nome do sistema -->
        <div class="streparava">STREPARAVA - Sete Lagoas/MG</div>
        <!-- Área do usuário logado -->
        <div class="usuario">          
            <!-- Exibe o nome do usuário logado -->
            <div>Bem vindo, <?php echo $nomeUsuario?></div>
            <!-- Botão de logout -->
            <form action="logout.php" method="POST">
                <button type="submit" class="botao-sair">
                    <img src="./img/sair.png" class="icone-sair">
                </button>
            </form>
        </div>
    </div>

    <!-- Menu de opções -->
    <div class="opcoes">
        <!-- Botão para abrir as inspeções -->
        <button id="btnInspecoes">Inspeções</button>
    </div> 
    
    <!-- Área de conteúdo que será preenchida dinamicamente -->
    <div id="conteudo"></div>

    <!-- Script para manipulação de eventos -->
    <script>
        $(document).ready(function(){
            // Quando o botão Inspeções for clicado
            $('#btnInspecoes').click(function(){
                // Carrega o conteúdo de inspecoes.php dentro da div #conteudo
                $('#conteudo').load('inspecoes.php', function(response, status, xhr) {
                    if(status == 'error'){
                        // Se não achar o arquivo, mostra mensagem de erro
                        $('#conteudo').html('<p>Arquivo inspecoes.php não foi encontrado. </p>');
                    } else {
                        // Se carregou certo, inicializa o leitor QRCode
                        let html5QrcodeScanner = new Html5QrcodeScanner("reader", {
                            fps: 10, // frames por segundo para capturar imagens
                            qrbox: { width: 250, height: 250 } // tamanho da área de leitura
                        });

                        // Renderiza o leitor dentro da div #reader
                        html5QrcodeScanner.render(
                            // Função executada quando QRCode é lido com sucesso
                            function(decodedText) {
                                // Se for uma sequência numérica de 28 caracteres
                                if (/^\d{25}$/.test(decodedText)) {
                                    // Preenche o input com o valor lido
                                    $("#qrcode-value").val(decodedText);
                                    // Para a câmera após ler um QRCode válido
                                    html5QrcodeScanner.clear();
                                } else {
                                    alert("QRCode inválido! Esperado 25 números.");
                                }
                            },
                            // Função executada quando ocorre erro de leitura
                            function(errorMessage) {
                                console.log("Erro leitura:", errorMessage);
                            }
                        );
                    }
                });
            });
        });

        $('#btnSalvar').click(function(){
                // 1. Limpa o input (se existir)
                $("#qrcode-value").val("");

                // 2. Reabre a câmera chamando automaticamente Inspeções
                $("#btnInspecoes").trigger("click");
            });
            
    </script>
</body>
</html>
