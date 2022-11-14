<?php

$sql = $_POST['data_agend'];

function formatDate(){
    $sql = "SELECT DATE_FORMAT(a.data_agend, '%d/%m/%Y') AS Data_Agendamento
    FROM agendamento a";
};

?>