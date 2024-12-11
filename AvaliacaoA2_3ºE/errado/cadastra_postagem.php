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
				<p class="titulo">Cadastro de Postagens </p>
				<form id="form2" method="post" action="processa_cadastra_postagen.php">
					<table width="100%" cellspacing="5">
						<tr>
							<td width="17%" align="right" valign="top">Título:</td>
							<td width="83%">
								<input name="titulo" type="text" size="50" required>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">Postagem:</td>
							<td>
								<textarea name="texto"  cols="50" rows="15"  required></textarea>
							</td>
						</tr>
						<tr>
							<td align="right">
								<input type="submit"  value="Postar" />
							</td>
							<td>
								<input type="submit"  value="Limpar campos" />
							</td>
						</tr>
					</table>
				</form>
				<p><a href="administracao.php">Voltar</a></p>
			</div>
			<div id="area_restrita">
				<span class="titulo">Saída da área restrita</span><br />
				<br />
				<?php
					include "in_login.php";
				?>
			</div>
		</div>
	</body>
</html>