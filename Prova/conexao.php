<?php

    $servidor = 'localhost';
    $banco = 'etmsl';
    $usuario = 'root';
    $senha = '';
    
    @session_start();

    try { 
        $pdo = new PDO("mysql:dbname=$banco; host=$servidor; charset=utf8","$usuario","$senha");
    } catch (Exception $e) {
        echo '<strong class="erro">Erro ao conectar no banco de dados.</strong>';
        echo '<br>';
        echo $e;
    }
    
?>