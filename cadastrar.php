<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css\all-style.css"> <!--chamando o arquivo css-->
    <link rel="stylesheet" type="text/css" href="css\login-and-register.css">     
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <div id="register-container">
        <h1>Cadastro</h1>
        <?php
        if(isset($_SESSION['cadastro_sucesso'])):
        ?>
            <div class="alert alert-success" role="alert">
                Cadastro efetuado com sucesso!
            </div>
        <?php
        endif;
        unset($_SESSION['cadastro_sucesso']);
        ?>
        <?php
            if(isset($_SESSION['usuario_existe'])):
        ?>
            <div class="alert alert-danger" role="alert">
            E-mail já cadastrado!
            </div>
        <?php
            endif;
            unset($_SESSION['usuario_existe']);
        ?>
        <form method="POST" action="validacao/processa-1.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Digite o seu melhor email"><br><br>
            <label>Senha: </label>
            <input type="password" name="password" id="password" placeholder="Digite uma senha"><br><br>
            <input type="submit" value="Cadastrar">
            <p>Já possui uma conta?</p>
            <a href="index.html" id="login-user">Login</a>
        </form>    
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

