<?php

if (!$_SESSION['email']) {
    header('Location: ../../19rw47/login.php');
    exit();
}

//Caso tente logar sem login, irá retornar pra página de login