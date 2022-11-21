<script language='javascript'>
    function confirmaExclusao(aURL) {

        if (confirm('Você tem certeza que deseja excluir?')) {

            location.href = aURL;

        }

    }
</script>
<?php

$busca = "Select * from paginas order by id";

$todos = mysqli_query($conn, $busca);

?>

<p>
    <a href="?pg=inserir" class="butao">Inserir Página</a>
    <a href="../?pg=principal" class="butao">Sair do admin</a>
</p>
<table style="background-color: #262626;">
    <tr style="color: #fff;">
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Titulo</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php while ($dados = mysqli_fetch_array($todos)) { ?>

        <tr>
            <td><?= $dados['id']; ?></td>
            <td><?= $dados['nome']; ?></td>
            <td><a href="?pg=alterar&id=<?= $dados['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
            <td><a href="javascript:confirmaExclusao('?pg=excluir&id=<?= $dados['id']; ?>')" class="ask">
                    <i class="glyphicon glyphicon-remove"></i></a></td>
        </tr>

    <?php } ?>

</table>