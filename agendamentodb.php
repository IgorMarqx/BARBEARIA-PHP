<?php

function dateFormat()
{
    $formatDate = "SELECT DATE_FORMAT(a.`data`, '%d/%m/%Y') AS data_agendamento
    FROM agendamento a
    ";
}

dateFormat();

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
        <a href='?pg=agendamento'>Tente Novamente</a>";
} else {
    echo "<h3>Cadastrada com sucesso!</h3><br>";
    echo "<a href='?pg=agendamento'>
       Cadastrar Novamente</a><br>";
    echo "<a href='?pg=servicos'>
       Visualizar agendamento</a><br>";
}
