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
				<p class="titulo">Alteração</p>
				<?php
					$conectar = mysqli_connect ("localhost", "root", "", "mini-blog");			
					
					$sql_consulta = "SELECT  cod_posta, titulo_posta FROM postagens";
					$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
							
					$linhas = mysqli_num_rows ($resultado_consulta);
					echo "<h3> Número de postagens cadastradas: $linhas  </h3>";
				?>		
				<table width="100%">	
				<?php		
					while ($registro = mysqli_fetch_row($resultado_consulta)) 
					{											
				?>						
					<tr>
						<td>
							<?php echo "$registro[1]"; ?>
						</td>
					
						<td>
							<a href="altera_postagem.php?codigo=<?php echo $registro[0]?>">
								Alterar	
							</a>	
						</td>
					</tr>
				<?php
					}
				?>
				</table>
				<p><a href="administracao.php">Voltar</a></p>
			</div>
			<div id="area_restrita">
				<span class="titulo">Saída da área restrita</span>
				<br />	<br />
				<?php
					include "in_login.php";
				?>
			</div>
		</div>
	</body>
</html>