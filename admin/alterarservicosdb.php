<?php

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $barbeiro = $_POST['barbeiro'];
    $tipCorte = $_POST['tipCorte'];

    
    $sql = mysqli_query($conn, "SELECT * FROM agendamento WHERE id = '$id'");

    
    $sql2 = "UPDATE agendamento SET nome='$nome', telefone='$telefone', data='$data', horario='$horario', barbeiro='$barbeiro', tipCorte='$tipCorte' WHERE id='$id'";
    
    $altera = mysqli_query($conn, $sql2);
    
    if(!$altera){
        echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
        <a href='admin.servicos.php'>Voltar</a>";
    }else{
       echo "<h3>Cadastrada com sucesso!</h3>
        <a href='admin.servicos.php'>Voltar</a>";
    }
