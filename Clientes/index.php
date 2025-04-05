<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <!-- Div da área -->
    <div class="area">
        <!-- Div do formulário -->
        <div class="form">
            <!-- adicionar os inputs e forms -->
            <div class="input">
                <label for="">Nome</label>
                <input type="text" name="nome">
            </div>
            
            <div class="input">
                <label for="">E-mail</label>
                <!-- campo name vira variável -->
                <input type="email" name="email">
            </div>

            <div class="input">
                <label for="">Telefone</label>
                <input type="tel" name="telefone">
            </div>

            <div class="input">
                <label for="">Assunto</label>
                <input type="text" name="assunto">
            </div>

            <div class="input">
                <label for="">Mensagem</label>
                <textarea name="mensagem" rows="5"></textarea>
                <div class="enviar">
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>