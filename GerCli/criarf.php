<?php
    //  Conexão com o DB
    require_once('conexao.php');
    // Buscar o conteúdo das variáveis 'usuario' e 'senha'
    @session_start();

    $user = $_POST['usuarioFunc']; //armazena na variável local o conteúdo do input usuario
    $nome = $_POST['nomeFunc'];
    $cpf = $_POST['cpfFunc'];
    $senha = $_POST['senhaFunc'];
    $fone = $_POST['foneFunc'];
    $email = $_POST['emailFunc'];
    $funcao = $_POST['funcaoFunc'];
    $ativo = $_POST['ativoFunc'];
    $cep = $_POST['cepFunc'];
    $rua = $_POST['ruaFunc'];
    $num = $_POST['numFunc'];
    $comp = $_POST['compFunc'];
    $bairro = $_POST['bairroFunc'];
    $cidade = $_POST['cidadeFunc'];
    $estado = $_POST['estadoFunc'];

    try {
        $query = "INSERT INTO gercli.funcionarios (usuarioFunc, nomeFunc, cpfFunc, senhaFunc, foneFunc, emailFunc, funcaoFunc,
        ativoFunc, cepFunc, ruaFunc, numFunc, compFunc, bairroFunc, cidadeFunc, estadoFunc)
        VALUES (:user, :nome, :cpf, :senha, :fone, :email, :funcao, :ativo, :cep, :rua, :num, :comp, :bairro, :cidade, :estado)";
        $stmt=$pdo->prepare(query: $query);
        $stmt->bindParam(':user',   $user);
        $stmt->bindParam(':nome',   $nome);
        $stmt->bindParam(':cpf',    $cpf) ;
        $stmt->bindParam(':senha',  $senha);
        $stmt->bindParam(':fone',   $fone);
        $stmt->bindParam(':email',  $email);
        $stmt->bindParam(':funcao', $funcao);
        $stmt->bindParam(':ativo',  $ativo);
        $stmt->bindParam(':cep',    $cep);
        $stmt->bindParam(':rua',    $rua);
        $stmt->bindParam(':num',    $num);
        $stmt->bindParam(':comp',   $comp);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':estado', $estado);

        $stmt->execute();
            echo "Dados salvos";
    } catch (Exception $e) {
        echo "Falha ao iniciar";
        echo '<br>';
        echo $e;
    }

?>