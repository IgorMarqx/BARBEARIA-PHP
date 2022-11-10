<?php

$id = $_GET['id'];
$sql = "SELECT * FROM paginas WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome da Página: </td>
        <td><input class="form-control" name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>Link: </td>
        <td><input class="form-control" name="link" type="text" value="<?=$dados['link'];?>"/></td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td><textarea class="form-control" name="descricao" value="<?=$dados['descricao'];?>"><?=$dados['descricao'];?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Enviar</button></td>
    </tr>
</table>
</form>
<?php 
}
?>