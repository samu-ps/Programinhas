<?php

    require_once('./conexao.php');
    @session_start();

    $nome = $_POST['nomeForn'];
    $fone = $_POST['foneForn'];

    try {
        $query = "INSERT INTO etmsl.fornecedor (nomeForn, foneForn)
        VALUES (:nome, :fone)";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':fone', $fone);

        $stmt->execute();
        echo 'Dados salvos';
        header("refresh:1;url=index.php");
    } catch (Exception $e) {
        echo 'Erro ao Salvar no banco de dados';
        echo '<br>';
        echo $e;
    }
?>