<?php

// abrindo SESSAO global '$_SESSION'
session_start();

// Chamando conexão com banco de dados
include_once('conexao.php');

// Se os campos tiverem vazio não irá fazer login 
if (empty($_POST['email']) && empty($_POST['pass'])) {
    header('Location: ../../login.php');
    exit;
}

// Prevenir contra sql injector
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['pass']);

// verificando se as credenciais estão armazenada no banco de dados
$query = ("SELECT * FROM usuarios WHERE email ='$email' AND senha = md5('$senha')");
$resul = mysqli_query($conexao, $query);
$num = mysqli_num_rows($resul);

// se a verificação for verdadeira irá continuar
// ou pode colocar if($num == 1){}, por padrão if espera valor positivo.
if ($num) {
    $_SESSION['email'] = $email;
    header('Location: ../../painel.php');
    exit;

    // se for falsa, irá pedi pra informar informações corretas
} else {
    $_SESSION['nao-autenticado'] = true;
    header('Location: ../../login.php');
    exit;
}
