<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <script src="https://kit.fontawesome.com/0e7ec74f80.js" crossorigin="anonymous"></script>

    <title>Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="containerPai">
        <div class="containerFilho">
            <img class="imgLogin" src="../img/ea1fb437126b153a1498c617f45103e3-removebg-preview.png" alt="">
            <h4>Área restrita</h4>
            <h5>Apenas para administradores <i class="fa-sharp fa-solid fa-skull-crossbones"></i></h5>
            <form class="form-signin" action="acesso.php" method="post">
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Informe seu login" required autofocus>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Informe sua senha" required>
                <button class="btn btn-lg btn-block" type="submit">Entrar</button>
            </form>
        </div>
    </div>

    <?php

    include_once('../rodape.php');

    ?>
</body>

</html>