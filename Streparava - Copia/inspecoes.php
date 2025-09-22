<?php
    // Inicia a sessão
    @session_start();

    // Se o usuário não estiver logado, redireciona para index.php
    if(!isset($_SESSION['usuario'])){
        echo '<script>window.location="./index.php"</script>';
        exit();
    }
?>

<!-- Título da seção -->
<h2>Leitura de QR Code</h2>
z
<!-- Área onde a câmera será exibida -->
<div id="reader"></div>

<!-- Input que recebe o código lido -->
<input type="text" id="qrcode-value" placeholder="Código lido aparecerá aqui" maxlength="25" readonly>

<style>
/* ======= ESTILO GERAL ======= */
body {
    margin: 0; /* remove margens padrão do navegador */
    background: linear-gradient(135deg, #185669, #0eaebc); /* fundo em degradê */
    font-family: Arial, Helvetica, sans-serif; /* fonte padrão */
    color: white; /* cor principal do texto */
}

/* ======= MENU SUPERIOR ======= */
.menu {
    background: white; /* fundo branco para contraste */
    color: rgba(223, 126, 8, 0.9); /* cor laranja para o texto do menu */
    display: flex; /* organiza elementos lado a lado */
    justify-content: space-between; /* espaço máximo entre título e usuário */
    align-items: center; /* centraliza verticalmente */
    padding: 12px 20px; /* espaçamento interno */
    font-size: 20px; /* tamanho do texto */
    box-shadow: 0px 2px 6px rgba(0,0,0,0.2); /* sombra para dar relevo */
}

.streparava {
    font-size: 26px; /* título maior */
    font-weight: bold; /* texto em negrito */
}

.usuario {
    display: flex; /* coloca elementos lado a lado */
    gap: 12px; /* espaçamento entre eles */
    align-items: center; /* centraliza verticalmente */
    font-size: 18px; /* tamanho da fonte */
}

.botao-sair {
    background: none; /* remove cor de fundo */
    border: none; /* remove borda */
    cursor: pointer; /* cursor de "mãozinha" */
    padding: 0; /* sem padding */
}

.icone-sair {
    width: 28px; /* largura do ícone */
    height: 28px; /* altura do ícone */
    transition: transform 0.2s ease; /* animação suave ao passar mouse */
}

.botao-sair:hover .icone-sair {
    filter: brightness(0.8); /* efeito de escurecer ícone */
    transform: scale(1.1); /* efeito de zoom no hover */
}

/* ======= BOTÕES DE OPÇÃO ======= */
.opcoes {
    display: flex; /* organiza botões lado a lado */
    justify-content: center; /* centraliza na tela */
    gap: 10px; /* espaçamento entre botões */
    padding: 15px; /* espaçamento interno */
    border-bottom: 2px solid white; /* linha separando menu das opções */
    background: rgba(0,0,0,0.1); /* fundo levemente escuro */
}

.opcoes button {
    background: rgba(14, 173, 188, 0.9); /* fundo azul esverdeado */
    color: #fff; /* texto branco */
    border: none; /* remove borda padrão */
    padding: 12px 18px; /* espaçamento interno */
    margin: 4px; /* espaço externo */
    font-size: 16px; /* tamanho do texto */
    cursor: pointer; /* cursor "mãozinha" */
    border-radius: 10px; /* cantos arredondados */
    transition: all 0.2s ease; /* animação suave ao passar mouse */
}

.opcoes button:hover {
    background-color: rgba(96, 175, 199, 1); /* muda cor no hover */
    transform: translateY(-2px); /* botão "sobe" um pouco */
}

/* ======= ÁREA DE CONTEÚDO ======= */
#conteudo {
    background: rgba(255,255,255,0.1); /* fundo translúcido */
    padding: 20px; /* espaçamento interno */
    margin: 20px auto; /* centraliza horizontalmente */
    border-radius: 12px; /* bordas arredondadas */
    width: 90%; /* ocupa quase toda largura da tela */
    max-width: 600px; /* mas nunca ultrapassa 600px */
}

#conteudo p {
    color: red; /* cor de erro em vermelho */
    font-weight: bold; /* texto em negrito */
}

</style>
