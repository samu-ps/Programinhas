<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./img/icone.png">
</head>
<body>
    <div class="fornecedores">
        <h2>Insira as Informações do seu Fornecedor</h2>
        <!-- inicio da div dos fornecedores -->
        <div class="form-forn">
            <form>
                <!-- div cadastro usada para alinhar os inputs em duas colunas -->
                <div class="cadastro">
                    <!-- div secao para organizar as colunas -->
                    <div class="secao">
                        <h2>Dados do Fornecedor</h2>
                        <!-- dados importates do fornecedor -->
                        <p>CNPJ</p>
                        <!-- <p> são usados para ideniicar o input -->
                        <!-- placeholders mostram exemplos do que deve ser colocado -->
                        <input type="text" name="cnpjForn" placeholder="00.000.000/0000-00" required>
                        <!-- Nome de registro= Nome em que a empresa foi reistrada -->
                        <p>Nome de Registro</p>
                        <input type="text" name="razaoSocialForn" placeholder="Ex:Tear Textil" required>
                        <!-- Nome da empresa= nome usado normalmente -->
                        <p>Nome da Empresa</p>
                        <input type="text" name="nomeFantasiaForn" placeholder="Ex: Fábrica Tear" required>
                        <!-- Nome do Fornecedor= Nome de um contato da empresa -->
                        <p>Nome do Fornecedor</p>
                        <input type="text" name="nomePessoaForn" placeholder="Não Obrigatório">
                        <p>Telefone de Contato</p>
                        <input type="tel" name="telefonePessoaForn" placeholder="[(00)00000-0000]" required>
                        <p>Email do Fornecedor</p>
                        <input type="text" name="emailPessoaForn" placeholder="Não Obrigatório">
                    </div>
                    <div class="secao">
                        <!-- secao de endereço da empresa do fornecedor -->
                        <h2>Área de Endereço</h2>
                        <p>CEP</p>
                        <input type="text" name="cepForn" placeholder="[00000-000]Não Obrigatório">
                        <p>Estado</p>
                        <input type="text" name="estadoForn" placeholder="Ex: MG" style="text-transform: uppercase;" maxlength="2" required>
                        <!-- "text-transform: uppercase" faz com que os inputs sejam naturalmente em caixa alta -->
                        <!-- "maxlenght" define a quantidade máxima de caracteres permitida -->
                        <p>Cidade</p>
                        <input type="text" name="cidadeForn" placeholder="Ex: SETE LAGOAS" style="text-transform: uppercase;" required>
                        <p>Bairro</p>
                        <input type="text" name="bairroForn" placeholder="Ex: CDI" style="text-transform: uppercase;" required>
                        <p>Logradouro</p>
                        <input type="text" name="ruaForn" placeholder="Rua, Avenida, Beco" style="text-transform: uppercase;" required>
                        <p>Número</p>
                        <input type="number" name="numForn" placeholder="Ex: 250" required>
                        <p>Complemento</p>
                        <input type="text" name="complementoForn" placeholder="Não Obrigatório">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>