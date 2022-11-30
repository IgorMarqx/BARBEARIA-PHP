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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/0e7ec74f80.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include_once('../menu.php');

	include_once('./topo.admin.php')

	?>

	<div class='container'>
		<?php
		include_once('./danger.php');
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