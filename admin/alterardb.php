<?php
  $conn = mysqli_connect("localhost","root","");

  $db = mysqli_select_db($conn,"barbearia");

$id =         $_POST['id'];
$nome =       $_POST['nome'];
$link =       $_POST['link'];
$descricao =  $_POST['descricao'];


$sql2 = mysqli_query($conn, "SELECT * FROM contpaginas WHERE id='$id'");

$sql = "UPDATE contpaginas SET nome='$nome', link='$link',
 descricao='$descricao' WHERE id=$id";

$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=/listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
    <a href='?pg=listar'>Voltar</a>";
}
?>