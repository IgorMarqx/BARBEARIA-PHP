<?php

$conn = mysqli_connect("localhost","root","");

$db = mysqli_select_db($conn,"barbearia");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_a = $_POST['data'];
$horario = $_POST['horario'];
$barbeiro = $_POST['barbeiro'];
$tipCorte = $_POST['tipCorte'];

$sql = "INSERT INTO agendamento (nome, telefone, data, horario, barbeiro, tipCorte) 
    VALUES ('$nome','$telefone','$data_a','$horario','$barbeiro', '$tipCorte')";

$insert = mysqli_query($conn, $sql);

if (!$insert) {
    echo "Ocorreu um erro ao cadastrar no banco de dados. 
        <a href='./agendamento.admin.php'>Tente Novamente</a>";
} else {
    echo "<h3>Cadastrada com sucesso!</h3><br>";
    header("Refresh: 1, ./admin.servicos.php");
}
