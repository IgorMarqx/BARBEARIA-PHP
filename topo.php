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
                    <a href="?pg=<?= $dados['link']; ?>"><?= $dados['nome']; ?></a>
                </li>
            <?php
            }
            ?>
            <li><a href="?pg=quemsomos">Sobre nós</a></li>
            <li><a href="?pg=servicos">Serviços</a></li>
            <li><a href="?pg=agendamento">Agendamento</a></li>
            <li><a href="?pg=faleconosco">Fale conosco</a></li>
        </ul>
    </div>
</header>