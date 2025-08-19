<!-- 5.1 - Autenticação -->
<?php
    //  Conexão com o DB
    require_once('conexao.php');
    // Buscar o conteúdo das variáveis 'usuario' e 'senha'
    @session_start();
    // armazenar o conteudo dos inputs em variáveis locais
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    // Verificar(SELECT) se o usuário e a senha existem no DB
    $query = $pdo -> query("SELECT * FROM funcionarios where usuarioFunc='$usuario' and senhaFunc='$senha'");
    // executar a query e armazenar a resposta do DB
    $result = $query -> fetchAll(PDO::FETCH_ASSOC); 
    // Analisar a resposta do DB
    if(@count($result)>0){
        // usuario e senha corretos, direcionar para principal.php
        echo '<script>window.location="principal.php"</script>';
    }
    else{
        // usuario e/ou senha incorretos
        echo 'Usuário ou senha estão incorretos.';
        echo '<script>window.alert("Usuário ou senha incorreto.")</script>';
        echo '<script>window.location="index.php"</script>';
    }
?>