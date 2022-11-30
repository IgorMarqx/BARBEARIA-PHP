<?php

    $sql = "TRUNCATE TABLE agendamento";
    $truncate = mysqli_query($conn, $sql);

    if(!$truncate){
        echo "Não foi possível excluir registro.
        <a href='admin.servicos.php'>Tente Novamente</a>";
    }else{
       echo "<h3>Tabela reiniciada com sucesso!</h3>";
        header("Refresh: 1, ./admin.servicos.php");
    }


?>