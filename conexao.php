<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'root');
define('BD', 'systec');

$conexao = new mysqli(HOST, USUARIO, SENHA, DB) or die('error');

?>