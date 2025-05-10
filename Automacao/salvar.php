<!-- Recebe o conteúdo dos inputs e armazena em variáveis locais para serem salvas(insert) no DB -->
<?php
//realizar conexão com o DB
    require_once("./conexao.php");
//receber as variáveis dos INPUTs E (arquivo index.php)
//armazenar em variáveis locais (criadas no arquivo salvar.php)

//criar uma sessão para variáveis globais
    @session_start();
    //criar variáveis locais para armazenar o conteúdo das variáveis globais (variáveis dos inputs)
    $user = $_POST['usuario']; //armazena na variável local o conteúdo do input usuario
    $fone = $_POST['telefone'];
    $passwd = $_POST['senha'];

    //tentar enviar(insert) as informações para o DB
    try {
        $query = "INSERT INTO usuarios (nomeUsuario, foneUsuario, senhaUsuario)
        VALUES (:user, :fone, :passwd)";
    } catch (\Throwable $th) {
        //throw $th;
    }   
?>
