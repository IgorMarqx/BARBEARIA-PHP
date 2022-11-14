<?php
$busca = "Select * from agendamento";

$query = mysqli_query($conn, $busca);

while ($dados = mysqli_fetch_array($query)) {

?>

    <br>
    <div>
        <table class="table table-dark table-striped">
            <thead class="table">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Data</th>
                    <th>Horario</th>
                    <th>Barbeiro</th>
                    <th>Tipo de Corte</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-dark">
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