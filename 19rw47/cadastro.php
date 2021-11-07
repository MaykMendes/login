<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-cadastr.css">
    <title>Cadastro</title>
</head>

<body>
    <form action="assets/class/cadastarsql.php" class="box" method="POST">
        <div class="digitar">
            <img src="assets/image/logo.png">

            <?php
            if ($_SESSION['status_cadastro']) :
            ?>
                <div class="sucess-cadastre">
                    <p>Cadastro efetuado com sucesso!</br><a href="login.php">Clique aqui</a> para realizar o login.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>

            <?php
            if ($_SESSION['usuario_existe']) :
            ?>
                <div class="error-cadastre">
                    <p>Usuario informado já existe, coloque outro e tente novamente.</p>
                </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>

            <input type="text" name="nome" placeholder="Nome" maxlength="45">
            <input type="text" name="usuario" placeholder="Usuário" maxlength="45">
            <input type="email" name="email" placeholder="E-mail" maxlength="110">
            <input type="password" name="senha" placeholder="Senha" maxlength="32">
        </div>
        <div class="contrato">
            <p>Ao cadastar você concordará com os nossos <a href="termos.php">termos de privacidade.</a></p>
        </div>
        <div class="enviar">
            <input type="submit" value="Cadastrar">
        </div>
        <div class="login">
            <p>Já tem login? <a href="login.php">Clique aqui.</a></p>
        </div>
        <div class="copy">
            <p>© Copyright 2025 19rw47 - All Rights Reserved</p>
        </div>
    </form>
</body>

</html>