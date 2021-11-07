<?php
session_start();
session_destroy();
header('Location: ../../login.php');
exit();
// Botão de sair pra destruir a sessão