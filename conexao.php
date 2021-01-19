<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'root');
define('BD', 'systec');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('erro');

?>