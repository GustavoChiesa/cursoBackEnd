<?php

session_start();
include('verificar_login.php');

//tratamento para nao entrar pela url
if($_SESSION['cargo_usuario'] != 'Administrador' && $_SESSION['cargo_usuario'] != 'Gerente'){
    header('Location: index.php');
    exit();
}

?>

<p>Este é o painel de Admin</p>

<h3>Usuário : <?php echo $_SESSION['nome_usuario']; ?></h3>
<h3>Cargo : <?php echo $_SESSION['cargo_usuario']; ?></h3>
<a href='index.php'>SAIR</a>