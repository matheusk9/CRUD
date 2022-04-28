<?php

session_start();
include_once("conexao.php"); 

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, md5($_POST['senha']));;

$sql = "select count(*) as total from clientes where email = '$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


//validando de user ja existe
if($row['total']==1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ..\cadastrar.php');
    exit;
}

$sql = "INSERT INTO clientes(nome, email, senha, created) VALUES('$nome','$email','$senha', NOW())"; //inserindo

if($conn->query($sql) === TRUE){
    $_SESSION['cadastro_sucesso'] = true;
}

$conn->close();

header("Location: ..\cadastrar.php");
exit;

?>