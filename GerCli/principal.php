<?php
    require_once("./conexao.php");
    @session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GerCli</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form {
            background-color: #1454b4;
            padding: 32px 24px;
            text-align: center;
            box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 0.7);
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="form col-12 col-sm-8 col-md-6 col-lg-4">
        <img src="./img/usera.png" alt="Login" width="130px" height="130px" class="d-block mx-auto my-4">
        <form action="autenticar.php" method="POST" class="p-4 border rounded bg-light">
            <h5 class="mb-4 text-center">Login</h5>
            <div class="mb-4">
                <label for="usuarioFunc" class="form-label">Usuário</label>
                <input type="text" class="form-control form-control-lg" id="usuarioFunc" name="usuarioFunc" required>
            </div>
            <div class="mb-4">
                <label for="senhaFunc" class="form-label">Senha</label>
                <input type="password" class="form-control form-control-lg" id="senhaFunc" name="senhaFunc" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Entrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

