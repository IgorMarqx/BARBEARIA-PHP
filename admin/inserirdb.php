<?php

$nome = $_POST['nome'];
$link = $_POST['link'];
$texto = $_POST['descricao'];

$sql = "INSERT INTO contPaginas VALUES 
('', '$nome', '$link', '$texto')";

$insert = mysqli_query($conn, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. 
    <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Página Cadastrada com sucesso!</h3>";
}
?>