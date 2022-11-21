<?php
include("../config.inc.php");
?>
<html>

<head>
	<title>MeuSite.com</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://kit.fontawesome.com/0e7ec74f80.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include_once('../menu.php');

	?>

	<div class='container'>

		<div class="container-adm">
			<h3>Atenção! Área Totalmente Restrita <i class="fa-sharp fa-solid fa-skull-crossbones"></i></h3>
			<h4>Apenas para administradores!</h4>
		</div>

		<?php
		# área de conteúdo
		if (empty($_SERVER["QUERY_STRING"])) {
			$var = "listar.php";
			include_once("$var");
		} else {
			$pg = $_GET['pg'];
			include_once("$pg.php");
		}
		?>
	</div>

	<?php

	include_once('../rodape.php');

	?>
</body>

</html>