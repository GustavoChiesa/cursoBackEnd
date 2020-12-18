<?php

session_start();
include('verificar_login.php');

?>

<p>Este é o painel da Tesouraria</p>

<h3>Usuário : <?php echo $_SESSION['nome_usuario']; ?></h3>
<h3>Cargo : <?php echo $_SESSION['cargo_usuario']; ?></h3>
<a href='logout.php'>SAIR</a>