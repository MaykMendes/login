<?php

session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$usuario = mysqli_real_escape_string($conexao, trim($_POST["usuario"]));
$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$password = mysqli_real_escape_string($conexao, trim(md5($_POST["senha"])));

$sql = "select count(*) as total from usuarios where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: ../../cadastro.php');
    exit;
}

$sql = "INSERT INTO usuarios(nome, usuario, email, senha, datecadastro) VALUES ('$nome', '$usuario', '$email', '$password', NOW())";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../../cadastro.php');
exit;
