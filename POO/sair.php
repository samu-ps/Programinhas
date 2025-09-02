<!-- 8.4 - Encerrar sessão de loin -->
<?php

    @session_start();
    session_unset(); //limpa as variáveis 
    session_destroy(); //apaga as variáveis

    // redirecionar para index.php
    header('Location: index.php');
    // limpar o cache do navegador
    exit();

?>