<!-- A fazer: -->
<!-- Nome, CPF, Telefone, Endereço completo senha, confirmar senha, botões salvar e cancelar,  -->
<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD:Cadastro/index.php
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Cadastro</title>
        <link rel="stylesheet" href="./estilo/estilo2.css">
        <link rel="shortcut icon" href="./img/inscription.png"
    </head>
    <body>
        <div class="usuario">
            <div class="formulario">
                <h2>Faça o Cadastro no Sistema</h2>
                <img src="./img/signup.png" alt="Key" width="90px" height="90px">
                <form action="#">
                    <input type="text" class="Nome" placeholder="Nome de Cadastro" required> 
                    <input type="text" id="cpf" class="CPF" placeholder="000.000.000-00" required >
                    <input type="text" id="telefone" class="Tel" placeholder="(00) 00000-0000"  required>
                    <input type="text" class="End" placeholder="Cidade, Bairro, Rua" required>
                    <input type="password" id="senha" class="senha" placeholder="Senha" required > <button id="versenha" class="ver" type="button" onclick="toggleSenha()">👁️ Ver Senha</button>
                    <input type="password" id="csenha" class="csenha" placeholder="Confirmar senha" required > 
                    <button class="confirm">Confirmar</button>
                    <button class="cancel">Cancelar</button>
                </form>
            </div>
        </div>
        <script src="./script/scripts.js"></script>
    </body>
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cadastro</title>
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./estilo/estilo2.css">
</head>
<body>
    <div class="usuario">
        <div class="formulario">
            <h2>Criar Conta</h2>
            <img src="./img/key.png" alt="Key" width="90px" height="90px">
            <form action="#">
                <div class="secao-container">
                    <div class="secao"> 
                        <h3>Seção de Dados</h3>
                        <p>Nome</p>
                        <input type="text" class="Nome" placeholder="Nome de Cadastro" style="text-transform: uppercase;" required> 
                        <p>CPF</p>
                        <input type="text" id="cpf" placeholder="[000.000.000-00]" required>
                        <p>Telefone Para Contato</p>
                        <input type="text" id="telefone" placeholder="[(00) 00000-0000]" required>
                        <p>Senha</p>
                        <input type="password" class="senha" placeholder="Senha" required>
                        <p>Confirmar Senha</p>
                        <input type="password" class="csenha" placeholder="Confirmar senha" required>
                        <p>Email</p>
                        <input type="text" class="email" placeholder="email123@gmail.com" required>
                    </div>
                    <div class="secao">
                        <h3>Seção de Endereço</h3>
                        <p>CEP</p>
                        <input type="text" id="CEP" placeholder="00000-000" required>
                        <p>Estado</p>
                        <input type="text" class="endereco" placeholder="Ex:ES" style="text-transform: uppercase;" maxlength="2" required>
                        <p>Cidade</p>
                        <input type="text" class="endereco" placeholder="Ex:Guarapari" style="text-transform: uppercase;" required>
                        <p>Logradouro</p>
                        <input type="text" class="endereco" placeholder="Rua, Avenida, Beco" style="text-transform: uppercase;" required>
                        <p>Número da Casa/AP</p>
                        <input type="text" class="endereco" placeholder="Ex:200" required>
                        <p>Complemento</p>
                        <input type="text" class="endereco" placeholder="Não Obrigatório">
                    </div>
                </div>
                <button type="button" class="confirm">Cadastrar</button>
            </form>
            <p><a href="./index2.html">Já tenho conta. Entrar</a></p>
        </div>
    </div>
    <script src="./script/scripts.js" defer></script>
</body>
>>>>>>> bc3451bdfb6ce7b37a8b13197f0d419887314004:Cadastro/index.html
</html>