<script language='javascript'>
    function confirmaExclusao(aURL) {

        if (confirm('Você tem certeza que deseja excluir?')) {

            location.href = aURL;

        }

    }

    function truncateConfirm(aURL){
        if(confirm('Você tem certeza que deseja fazer isso?')){
            location.href = aURL
        }
    }
</script>
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/0e7ec74f80.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../css/style.css">
 </head>

 <?php

    include_once('../menu.php');
    include_once('./topo.admin.php');
    include_once('./danger.php');

    ?>



 <div class="container">
     <a href="./agendamento.admin.php" class="btn btn-success">Inserir agendamento</a>
     <a href="../?pg=principal" class="btn btn-danger">Sair do admin</a>
     <a href="javascript:truncateConfirm('./?pg=truncate')" class="btn btn-warning">Reiniciar tabela</a>
     <br>
     <br>
     <div id="margin-top" class="container-cust">
         <table class="tbl-head">
             <thead class="">
                 <tr class="text-color">
                     <th>#</th>
                     <th>Nome</th>
                     <th>Telefone</th>
                     <th>Data</th>
                     <th>Horario</th>
                     <th>Barbeiro</th>
                     <th>Tipo Corte</th>
                     <th>Alterar</th>
                     <th>Excluir</th>
                 </tr>
         </table>
     </div>

     <?php
        $busca = "SELECT * from agendamento ORDER BY id";

        $query = mysqli_query($conn, $busca);

        // if($conn){
        //     echo "Conexão estabelecida com sucesso";
        // }else{
        //   echo "Erro na conexão com banco de dados.";
        // }

        while ($dados = mysqli_fetch_array($query)) {

        ?>

         <div class="container-cust">
             <table class="tbl-body">
                 <tbody>
                     <tr class="text-color">
                         <th><?= $dados['id']; ?></th>
                         <td><?= $dados['nome']; ?></td>
                         <td><?= $dados['telefone']; ?></td>
                         <td><?= $dados['data']; ?></td>
                         <td><?= $dados['horario']; ?></td>
                         <td><?= $dados['barbeiro']; ?></td>
                         <td><?= $dados['tipCorte']; ?></td>
                         <td style="text-align: center;"><a href="./?pg=alterarservicos&id=<?= $dados['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
                         <td style="text-align: center;"><a href="javascript:confirmaExclusao('./?pg=excluirservicos&id=<?= $dados['id']; ?>')"><i class="glyphicon glyphicon-remove"></i></a></td>
                     </tr>
                 </tbody>
             </table>
         </div>
     <?php } ?>

     <?php

        include_once('../rodape.php');

        ?>
 </div>