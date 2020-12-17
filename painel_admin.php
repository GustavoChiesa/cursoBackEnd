<?php

session_start();
include('verificar_login.php');

?>

<p>Este é o painel de Admin</p>

<h3>Usuário : <?php echo $_SESSION['usuario'] ?></h3>
<a href='logout.php'>SAIR</a>