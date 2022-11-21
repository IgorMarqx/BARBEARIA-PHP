<?php
$login = $_POST['usuario'];
$senha = $_POST['senha'];

$conn = mysqli_connect("localhost","root","");

$db = mysqli_select_db($conn,"crudadmin");


 if($login != "admin" && $senha != "senha"){
    echo "<script language='javascript' type='text/javascript'>
    alert('Usuário ou Senha inválidos. Tente novamente.'); 
    window.location.href='login.php';</script>";
 }else{
     setcookie("login",$login);
     setcookie("senha", $senha);
     header("Location: index.php");
 }

?>