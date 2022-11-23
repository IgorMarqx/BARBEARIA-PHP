<?php

$id = $_GET['id'];
$sql = "SELECT * FROM contpaginas WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while ($dados = mysqli_fetch_array($busca)) {

?>
    <div class="container">
        <center><h2>Editar página</h2></center>
    </div>
    <form action="?pg=alterardb" method="post">
        <input type="hidden" name="id" value="<?= $dados['id']; ?>">
        <a style="margin-left: 1.5rem;" class="btn btn-danger" href="?pg=listar">Voltar</a>
        <div class="container">
            <tr>
                <label for="">Insira o nome da página</label>
                <input class="form-control" name="nome" type="text" value="<?= $dados['nome']; ?>" />
            </tr>
            <tr>
                <label for="">Insira o link</label>
                <input class="form-control" name="link" type="text" value="<?= $dados['link']; ?>" />
            </tr>
            <tr>
                <label for="">Insira a Descrição</label>
                <textarea class="form-control" name="descricao" value="<?= $dados['descricao']; ?>"><?= $dados['descricao']; ?></textarea>
            </tr>
            <tr>
                <br>
                <td><button class="btn btn-success" name="Enviar">Enviar</button></td>
            </tr>
            </table>
        </div>
        <table>
    </form>
<?php
}
?>