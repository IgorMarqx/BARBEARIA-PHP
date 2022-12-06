<?php

$id = $_GET['id'];
$sql = "SELECT * FROM agendamento WHERE id= $id";
$busca = mysqli_query($conn, $sql);

while ($dados = mysqli_fetch_array($busca)) {

?>

    <div class="container">
        <center>
            <h2>Editar página</h2>
        </center>
    </div>
    <form action="?pg=alterarservicosdb" method="post">
        <input type="hidden" name="id" value="<?= $dados['id']; ?>">
        <a style="margin-left: 1.5rem;" class="btn btn-danger" href="?pg=admin.servicos">Voltar</a>
        <div class="container">
            <br>
            <label for="nome">Informe o novo nome</label>
            <input autofocus id="nome" class="form-control" name="nome" type="text" value="<?= $dados['nome']; ?>" />

            <label for="cell">Informe um novo telefone</label>
            <input id="cell" class="form-control" name="telefone" type="text" value="<?= $dados['telefone']; ?>" />

            <label for="data">Informe uma nova data</label>
            <input id="data" type="date" class="form-control" name="data" value="<?= $dados['data']; ?>">

            <label for="hour">Informe um novo horário</label>
            <input id="hour" type="text" class="form-control" name="horario" value="<?= $dados['horario']; ?>">
            
            <label for="barb">Selecione um novo barbeiro</label>
            <select id="barb" required class="form-control" name="barbeiro" id="">
                <option value="">Selecione um Barbeiro</option>
                <option value="Wesley">Barbeiro Wesley</option>
                <option value="Wagner">Barbeiro Wagner</option>
                <option value="Junior">Barbeiro Junior</option>
                <option value="Fabricio">Barbeiro Fabricio</option>
            </select>

            <label for="cut">Informe um novo corte</label>
            <input id="cut" type="text" class="form-control" name="tipCorte" value="<?= $dados['tipCorte']; ?>">

            <br>
            <button class="btn btn-success" name="submit">Enviar</button>
        </div>
    </form>


<?php
}
?>