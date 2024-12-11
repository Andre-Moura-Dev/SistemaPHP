
<html>
	<head>
		<title>Documento sem título</title>
		<link href="estilos/layout.css" rel="stylesheet" type="text/css" />
		<link href="estilos/texto.css" rel="stylesheet" type="text/css" />
	</head>

<body>
	<div id="principal">
		<div id="banner"></div>
		<div id="postagens">
			<p class="titulo">Lista de postagens </p>
			<?php
				$conectar = mysqli_connect("localhost", "root", "", "mini-blog");		
				
				$sql_consulta = "SELECT titulo_posta, 
										texto_posta 
								 FROM 	postagens";											
				$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
				
				$linhas = mysqli_num_rows ($resultado_consulta);				
				echo "<h3> Número de postagens: $linhas </h3>";
				
				if ($resultado_consulta) {

					while ($registro = mysqli_fetch_row($resultado_consulta)) {
						echo "<h2> $registro[0] </h2>";
						echo "<p> $registro[1] </p>";
						echo " <hr> ";						
					}
				}
				else {
					echo "<h3> Ainda não existem postagens </h3>";
				}
			?>
		</div>
		<div id="area_restrita"><span class="titulo">Acesso a área restrita</span><br />
			<br />
			<form  method="post" action="processa_login.php">
			  <table width="67%" align="center" cellspacing="5">
				<tr>
				  <td width="28%" class="postagem">Login:</td>
				  <td width="72%">
					<input type="text" name="login" required>
				  </td>
				</tr>
				<tr>
				  <td class="postagem">Senha:</td>
				  <td>
					<input type="password" name="senha" required>
				  </td>
				</tr>
				<tr>
				  <td></td>
				  <td align="right">
					<input type="submit"  value="Enviar" required>
				  </td>
				</tr>
			  </table>
			</form>
		  </div>
	</div>
</body>
</html>