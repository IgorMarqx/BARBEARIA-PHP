<script language='javascript'>
    function confirmaExclusao(aURL) {

        if (confirm('Você tem certeza que deseja excluir?')) {

            location.href = aURL;

        }

    }
</script>
<?php

$busca = "Select * from contpaginas order by id";

$todos = mysqli_query($conn, $busca);

?>

<?php
   include_once('./btns.php'); 
?>
<table class="tbl-head" style="background-color: #262626;">
    <tr style="color: #fff;" class="tdList">
        <td style="width: 25px; text-align: center;" >Id</td>
        <td style="width: 205px; text-align: center;">Titulo</td>
        <td style="width: 105px; text-align: center;">Alterar</td>
        <td style="width: 105px; text-align: center;">Excluir</td>
    </tr>
    <?php while ($dados = mysqli_fetch_array($todos)) { ?>

        <tr class="tbl-body">
            <td style="text-align: center; color: #fff;"><?= $dados['id']; ?></td>
            <td style="text-align: center; color: #fff;"><?= $dados['nome']; ?></td>
            <td style="text-align: right;"><a href="?pg=alterar&id=<?= $dados['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
            <td style="text-align: right;"><a href="javascript:confirmaExclusao('?pg=excluir&id=<?= $dados['id']; ?>')" class="ask"><i class="glyphicon glyphicon-remove"></i></</tr>

    <?php } ?>

</table>