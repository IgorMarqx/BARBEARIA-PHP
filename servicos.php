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
                <th>Tipo de Corte</th>
            </tr>
    </table>
</div>


<?php
$busca = "Select * from agendamento";

$query = mysqli_query($conn, $busca);

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
                </tr>
            </tbody>
        </table>
    </div>

<?php } ?>