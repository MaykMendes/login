<?php
session_start();
include('assets/class/vereficalogin.php');
?>

<h2>Olá, <?php echo $_SESSION['email']; ?></h2>
<h2><a href="assets/class/logout.php">Sair</a></h2>