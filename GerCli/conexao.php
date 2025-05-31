<!-- 4.1 - Configurar o arquivo conexão.php -->

<?php
    // Criar variável de memória para conter as informações de acesso ao DB
    $servidor = 'localhost';
    $banco = 'gercli';
    $usuario = 'root';
    $senha = '';
    
    // Tratar/tentar a conexão com o DB
    try { 
        //criar variável do tipo DPO
        $pdo = new PDO("mysql:dbname=$banco; host=$servidor; charset=utf8","$usuario","$senha");
    } catch (Exception $e) {//se der errado:
        // Criamos a variável do tipo Exception(e) para receber os erros de conexão retornados pelo DB
        echo '<strong class="erro">Erro ao conectar no banco de dados.</strong>';
        echo '<br>';
        echo '<strong class="erro">Entre em contato com os alunos da Informática da ETMSL.</strong>';
        echo '<br>';
        // Exibe a mensagem de erro 
        echo $e;
    }
    
    
?>