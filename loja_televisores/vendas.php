<?php
	session_start(); //Conectar o PHP aos demais arquivos e ao banco
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	</head>
	<body>
		<div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> GLAUCIMAR </h1>
					<h1> Televisores </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> VENDAS </h1>							
				<?php 
					$conectar = mysqli_connect("localhost", "root", "", "televisores");

					$sql_consulta = "SELECT Cod_televisores,
											tipo_telev,
											marca_telev,
											modelo_telev,
											preco_telev,
											qtd_portas_hdmi_telev,
											qtd_portas_usb_telev,
											qtd_polegadas,
											resolucao_telev,

									 FROM 	televisores

									 WHERE 	vendas_Cod_ven

									 AND	fila_compra_telev = 'N'";

					$resultado_consulta = mysqli_query($conectar, $sql_consulta);
				?>

				<table width="100%">
					<tr height="50px">
						<td class="esquerda">
							Tipo
						</td>
						<td>
							Marca
						</td>
						<td>
							Modelo
						</td>
						<td>
							Preço
						</td>
						<td>
							Quantidade Portas Hdmi
						</td>
						<td>
							Quantidade Portas Usb
						</td>
						<td>
							Polegadas
						</td>
						<td>
							Resolucao
						</td>					
						<td class="direita">
							Ação
						</td>
					</tr>
					<?php		
						while ($registro = mysqli_fetch_row($resultado_consulta))
						{
					?>						
					<tr height="50px">
						<td class="esquerda">
							<?php echo $registro[1]; ?>
						</td>
						<td>
							<a href="exibe_amp.php?codigo=<?php echo $registro[0]?>"> 
								<?php 
									echo $registro[2];
								?>
							</a>
						</td>
						<td class="esquerda">
							<?php echo $registro[3]; ?>
						</td>
						<td class="esquerda">
							<?php echo $registro[4]; ?>
						</td>
						<td class="esquerda">
							<?php echo $registro[5]; ?>
						</td>
						<td class="esquerda">
							<?php echo $registro[6]; ?>
						</td>
						<td class="esquerda">
							<?php echo $registro[7]; ?>
						</td>			
						<td class="direita">
							<a href="processa_fila_compras.php?codigo=<?php echo $registro[0]?>">
								Colocar na fila de compras	
							</a>
						</td>
					</tr>
					<?php
						}
					?>
				</table>


				<p> <a href="ver_fila_compras.php"> Ver a fila de compras </a> </p>
							
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> TELEV - CONTROL </h6> 
						<h6> Rua do televisor, 777 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 5432 </h6> 
					</div> 
				</div>
		</div>
	</body>
</html>