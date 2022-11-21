<?php

$id = $_GET['id'];

$sql = "DELETE FROM paginas WHERE id = ('$id')";

$delete = mysqli_query($conn, $sql);

if(!$delete){
    echo "Não foi possível excluir registro.
    <a href='?pg=listar'>Tente Novamente</a>";
}else{
   echo "<h3>Registro excluído com sucesso!</h3>";
    header("Refresh: 5, ../admin");
}


?>