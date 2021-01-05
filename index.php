<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/fav.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>

    <!-- Font Awsome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>

    <title>Form</title>
  </head>
  <body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <div class="container">
        <div class="card card-login mx-auto text-center bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span> <img src="https://amar.vote/assets/img/amarVotebd.png" class="w-75" alt="Logo"> </span><br/>
                    <span class="logo_title mt-5">LOGIN</span>

                    <?php
                    if(isset($_SESSION['nao_autenticado'])): ?>
                        <p><small><small>Usuário ou Senhas Inválidos!</small></small></p> 
                    <?php 
                        endif; 
                        unset($_SESSION['nao_autenticado']);
                    ?>

            </div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>