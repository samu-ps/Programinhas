<!-- A fazer: -->
<!-- Nome, CPF, Telefone, Endereço completo senha, confirmar senha, botões salvar e cancelar,  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cadastro</title>
    <link rel="stylesheet" href="./estilo/estilo2.css">    
</head>
<body>
    <div class="usuario">
        <div class="formulario">
            <h2>Cadastro</h2>
            <img src="./img/key.png" alt="Key" width="90px" height="90px">
            <form action="#">
                <input type="text" class="Nome" placeholder="Nome de Cadastro" required> 
                <input type="number" class="CPF" placeholder="000.000.000-00" required>
                <input type="number" class="Tel" placeholder="(00) 00000-0000" required>
                <input type="text" class="End" placeholder="Cidade, Bairro, Rua" required>
                <input type="password" class="senha" placeholder="Senha" required>
                <input type="password" class="csenha" placeholder="Confirmar senha" required>
                <button class="confirm">Confirmar</button>
                <button class="cancel">Cancelar</button>
            </form>
        </div>
    </div>
</body>
</html>