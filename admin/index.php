<?php
	include("../config.inc.php");
?>
<html>
<head>
    <title>MeuSite.com</title>
    <link rel="stylesheet" type="text/css" 
          href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/novocss.css">
</head>
<body>
	<?php
		include_once('../topo.php');
		
	?>
	
	<div class='container'>
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "listar.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
</body>
</html>