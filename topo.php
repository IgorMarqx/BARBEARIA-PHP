<?php
include("config.inc.php");
?>

<header>
    <div class="topo-container">
        <ul class="nav">
            <li><a href="?pg=principal">Home</a></li>
            <?php
            $busca = "Select * from paginas order by id";

            $todos = mysqli_query($conn, $busca);

            while ($dados = mysqli_fetch_array($todos)) {

            ?>
                <li>
                    <a href="?pg=<?= $dados['link']; ?>"><?= $dados['nome']; ?> asdsa</a>
                </li>
            <?php
            }
            ?>
            <li><a href="">Sobre nós</a></li>
            <li><a href="">Serviços</a></li>
            <li><a href="?pg=faleconosco">Fale conosco</a></li>
        </ul>
    </div>
</header>