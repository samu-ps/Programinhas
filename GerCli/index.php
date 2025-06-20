<!-- 4 - fazer conexão ao arquivo conexão.php -->
<?php
    require_once("./conexao.php"); 
    //criar uma sessão para compartilhamento das variáveis de memória
    @session_start();
?>
<!-- 1 - Criar a estrutura html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto GerCli</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="login row justify-content-center" >
        <div class="form col-10">
            <img src="./img/usera.png" alt="Login" width="130px" height="130px">
            <!-- imagem -->
            <!-- 5 - configurar o 'action' e o POST do form -->
            <form action="criarf.php" method="POST" class="p-5 border rounded bg-dark text-light">
                <!-- Informações Pessoais -->
                <h5 class="mb-4">Informações do Funcionário</h5>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label for="nomeFunc" class="form-label">Nome</label>
                        <input type="text" class="form-control form-control-lg" id="nomeFunc" name="nomeFunc" maxlength="150" required >
                    </div>
                    <div class="col-md-4">
                        <label for="cpfFunc" class="form-label">CPF</label>
                        <input type="text" class="form-control form-control-lg" id="cpfFunc" name="cpfFunc" maxlength="14" required>
                    </div>
                    <div class="col-md-4">
                        <label for="foneFunc" class="form-label">Telefone</label>
                        <input type="text" class="form-control form-control-lg" id="foneFunc" name="foneFunc" maxlength="14">
                    </div>
                </div>
                <div class="row g-4 mt-1">
                    <div class="col-md-4">
                        <label for="emailFunc" class="form-label">E-mail</label>
                        <input type="email" class="form-control form-control-lg" id="emailFunc" name="emailFunc">
                    </div>
                    <div class="col-md-4">
                        <label for="funcaoFunc" class="form-label">Função</label>
                        <input type="text" class="form-control form-control-lg" id="funcaoFunc" name="funcaoFunc">
                    </div>
                    <div class="col-md-4">
                        <label for="ativoFunc" class="form-label">Ativo</label>
                        <select class="form-select form-select-lg" id="ativoFunc" name="ativoFunc" required>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                </div>
                <div class="row g-4 mt-1">
                    <div class="col-md-4">
                        <label for="usuarioFunc" class="form-label">Usuário</label>
                        <input type="text" class="form-control form-control-lg" id="usuarioFunc" name="usuarioFunc" required>
                    </div>
                    <div class="col-md-4">
                        <label for="senhaFunc" class="form-label">Senha</label>
                        <input type="password" class="form-control form-control-lg" id="senhaFunc" name="senhaFunc" required>
                    </div>
                </div>
                <!-- Endereço -->
                <h5 class="mb-4 mt-5">Endereço do FUncionário</h5>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label for="cepFunc" class="form-label">CEP</label>
                        <input type="text" class="form-control form-control-lg" id="cepFunc" name="cepFunc" maxlength="9">
                    </div>
                    <div class="col-md-4">
                        <label for="estadoFunc" class="form-label">Estado</label>
                        <select class="form-select form-select-lg" id="estadoFunc" name="estadoFunc">
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="cidadeFunc" class="form-label">Cidade</label>
                        <input type="text" class="form-control form-control-lg" id="cidadeFunc" name="cidadeFunc">
                    </div>
                    <div class="col-md-4">
                        <label for="bairroFunc" class="form-label">Bairro</label>
                        <input type="text" class="form-control form-control-lg" id="bairroFunc" name="bairroFunc">
                    </div>
                    <div class="col-md-4">
                        <label for="ruaFunc" class="form-label">Rua</label>
                        <input type="text" class="form-control form-control-lg" id="ruaFunc" name="ruaFunc">
                    </div>
                    <div class="col-md-4">
                        <label for="numFunc" class="form-label">Número</label>
                        <input type="text" class="form-control form-control-lg" id="numFunc" name="numFunc">
                    </div>
                </div>
                <div class="row g-4 mt-1 justify-content-center">
                    <div class="col-md-4">
                        <label for="compFunc" class="form-label">Complemento</label>
                        <input type="text" class="form-control form-control-lg" id="compFunc" name="compFunc">
                    </div>
                </div>
                <div class="row g-4 mt-1">
                </div>
                <button type="submit" class="btn btn-success btn-lg mt-4 w-100">Salvar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>
</body>
</html>