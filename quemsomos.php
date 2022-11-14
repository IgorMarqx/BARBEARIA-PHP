<?php
    $busca = "Select * from paginas WHERE id = 1";

    $query = mysqli_query($conn, $busca);

    while ($dados=mysqli_fetch_array($query)) {
        
?>

<h2><?= $dados['nome'];?></h2>
<div>
    <p>
     <?= $dados['descricao'];?>
    </p>
</div>

<?php } ?>