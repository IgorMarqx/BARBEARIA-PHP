
<?php

    include("config.inc.php");

?>

<header>
    <div class="topo-container">
        
        <ul class="nav">
            
            <li><a href="?pg=principal">Home</a></li>
            
            <?php
            
            $busca = "Select * from contpaginas order by id";

            $todos = mysqli_query($conn, $busca);

            while ($dados = mysqli_fetch_array($todos)) {

            ?>
                <li>
                    
                    <a href="?pg=<?= $dados['link']; ?>"><?= $dados['nome']; ?></a>
                    
                </li>
            
            <?php
            }
            
            ?>
            
            <li><a href="?pg=servicos">Serviços</a></li>
            
            <li><a href="?pg=agendamento">Agendamento</a></li>
            
            <li><a href="?pg=faleconosco">Fale conosco</a></li>
            
        </ul>
        
        <div class="admin nav">
            
            <li><a href="./admin/login.php"><i id="user" class="fa-solid fa-user"></i>Admin</a></li>
            
        </div>
        
    </div>
    
</header>
