<?php // Abrir sessão global
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-logar.css" class="css">
</head>

<body>
    <form class="box" action="assets/class/logarsql.php" method="post">
        <img src="assets/image/logo.png">


        <?php // Mostrar login inválido se não tiver login correto
        if (isset($_SESSION['nao-autenticado'])) :
        ?>
            <p>E-mail ou senha inválida</p>
        <?php
        endif;
        unset($_SESSION['nao-autenticado']);
        ?>

        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="pass" placeholder="Senha">
        <input type="submit" name="bnt-logar" value="Acessar">
        <p>Não faz parte? <a href="cadastro.php">Clique aqui.</a></p>
        <div class="copy">
            <p>© Copyright 2025 19rw47 - All Rights Reserved</p>
        </div>
    </form>
</body>

</html>