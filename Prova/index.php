<?php
    require_once("./conexao.php"); 
    @session_start();
?>
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
    <div class="login justify-content-center" >
        <div class="form col-10 p-4">
            <form action="./autenticar.php" method="POST" class="p-4 border rounded bg-dark text-light justify-content-center">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-10">
                        <label for="nomeFunc" class="form-label">Nome do Fornecedor</label>
                        <input type="text" class="form-control form-control-lg" id="nomeForn" name="nomeForn" placeholder="Nome Completo" required>
                    </div>
                    <div class="col-md-7">
                        <label for="foneFunc" class="form-label">Telefone do Fornecedor</label>
                        <input type="text" class="form-control form-control-lg" id="foneForn" name="foneForn" placeholder="(XX) XXXXX-XXXX" required>
                    </div>
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-lg mt-4 w-100"> Salvar</button>
                    </div>
                </div>
                </form>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script>
        document.getElementById('foneForn').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) {
                value = value.slice(0, 11);
            }
            if (value.length > 10) {
                value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
            } else if (value.length > 6) {
                value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
            } else if (value.length > 2) {
                value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
            } else {
                value = value.replace(/^(\d*)/, '($1');
            }
            e.target.value = value;
        });
    </script>
</body>
</html>