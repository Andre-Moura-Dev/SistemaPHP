<?php
	session_start();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Documento sem título</title>
		<link href="estilos/layout.css" rel="stylesheet" type="text/css" />
		<link href="estilos/texto.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="principal">
			<div id="banner"></div>
			<div id="postagens">
				<span class="titulo">Menu da área Restrita</span>
				<p class="postagem"><a href="cadastra_postagem.php">Cadastro de Postagens</a></p>
				<p class="postagem"><a href="lista_postagens.php">Alteração / Exclusão de Postagens</a></p>
				<div id="area_restrita"><span class="titulo">Saída da área restrita</span><br />
				<br />
				<?php
					include "in_login.php";
				?>
			</div>
		</div>
	</body>
</html>