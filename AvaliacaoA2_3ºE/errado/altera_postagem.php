<?php
	session_start ();
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
				<p>	Formulário de Alteração de Noticias </p>
					<?php
						$conectar = mysqli_connect ("localhost", "root", "", "mini-blog");
						
						$cod = $_GET["codigo"];
										
						$sql_pesquisa = "SELECT  cod_posta, titulo_posta, texto_posta
										 FROM postagens
										 WHERE cod_posta = '$cod'";
						$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);	
						
						$registro = mysqli_fetch_row($resultado_pesquisa);
					
					?>
					<form method="post" action="processa_altera_postagem.php">
						<input type="hidden" name="codigo" value="<?php echo $registro[0]; ?>">
						<p>	Titulo: <input type="text" name="titulo" value = "<?php echo $registro[1]; ?>" required> </p>
						<p> Texto: <br> <textarea name="texto" required> <?php echo $registro[2]; ?> </textarea> </p>
							
						<p> <input type="submit" value="Alterar Noticia"> </p>
					<form>
				<p><a href="lista_postagens.php">Voltar</a></p>
			</div>
			<div id="area_restrita">
				<span class="titulo">Saída da área restrita</span>
				<br /><br />
				<?php
					include "in_login.php";
				?>
			</div>
		</div>
	</body>
</html>

