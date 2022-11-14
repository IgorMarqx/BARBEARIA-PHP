<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

   $sql = "INSERT INTO formulario (nome, email, telefone, assunto, mensagem) 
    VALUES ('$nome','$email','$telefone',
    '$assunto','$mensagem')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados. 
        <a href='?pg=faleconosco'>Tente Novamente</a>";
    }else{
       echo "<h3>Cadastrada com sucesso!</h3><br>";
       echo "<a href='?pg=faleconosco'>
       Cadastrar Novamente</a><br>";
    }
?>