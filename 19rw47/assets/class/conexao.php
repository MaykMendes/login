<?php
error_reporting(0);
// Conexão com banco de dados
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cadastro";

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
