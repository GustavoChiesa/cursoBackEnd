<?php

//Caso o campo usario e senha estiverem vazios e 
//o usuario der um login a pagina da um f5
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location : index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha =  mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where usuario = '{$usuario}' and senha = '{$senha}' ";

$result = mysqli_query($conexao, $query);

$dado = mysqli_fetch_array($result);

$row = mysqli_num_rows($result);

if($row > 0){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome_usuario'] = $dado["nome"];
    $_SESSION['cargo_usuario'] = $dado["cargo"];
    header('Location: painel_admin.php');
    
    // if($_Session['cargo_usuario'] = 'adimn') || $_SESSION['cargo_usuario'] = 'gerente'){
    //     header('Location : painel_admin.php');
    //     exit();
    // }
    
    exit();

}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
?>