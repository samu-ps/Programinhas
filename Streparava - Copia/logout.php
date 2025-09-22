<!-- 6.1 - Arquivo logout.php para encerrar sessão -->
<?php
    // iniciar a sessão de variáveis
    @session_start();
    // limpar as variáveis da sessão
    @session_unset();
    // destruir a sessão de variáveis
    @session_destroy();
    // redirecionar para o arquivo index.php
    echo '<script>window.location="./index.php"</script>';
    // limpar o cache do navegador
    exit();
?>