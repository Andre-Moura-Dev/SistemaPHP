<?php
	session_start();
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
					<h1> Glaucimar </h1>
					<h1> Televisores </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> TELEVISORES </h1>
				<?php
					$conectar = mysqli_connect ("localhost", "root", "", "televisores");			
				
					$sql_consulta = "SELECT 
											Cod_Televisores, 
											marca_telev, 
											modelo_telev, 
											tipo_telev, 
											preco_telev,
											qtd_portas_hdmi_telev,
											qtd_portas_usb_telev,
											polegadas_telev,
											resolucao 
									 FROM amplificadores 
									 WHERE 	
											vendas_cod_ven IS null 
									 AND 
											fila_compra_telev = 'S'";
					$resultado_consulta = mysqli_query ($conectar, $sql_consulta);					
						
				?>
				<table width="100%">
					<tr  height="50px">
						<td class="esquerda">
							Marca
						</td>
						<td>
							Modelo
						</td>
						<td>
							Tipo
						</td>
						<td>
							Preço
						</td>
						<td>
							Quantdade Portas HDMI
						</td>
						<td>
							Quantidade Portas USB
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
						$valor_total = 0;
						while ($registro = mysqli_fetch_row($resultado_consulta))
						{
					?>						
					<tr height="50px">
						<td>
							<?php echo $registro[1]; ?>
						</td>
						<td>
							<a href="exibe_amp.php?codigo=<?php echo $registro[0]?>"> 
								<?php 
									echo "$registro[2]";
								?>
							</a>
						</td>
						<td>
							<?php echo $registro[3]; ?>
						</td>
						<td>
							<?php echo $registro[4]; ?>
						</td>
						<td>
							<?php echo $registro[5]; ?>
						</td>
						<td>
							<?php echo $registro[6]; ?>
						</td>
						<td>
							<?php echo $registro[7]; ?>
						</td>
						<td>
							<?php echo $registro[8]; ?>
						</td>
						<td class="esquerda">
							<?php 
								echo $registro[4];
								$valor_total = $valor_total + $registro[4];
							?>
						</td>							
						<td>
							<a href="processa_retira_fila_compras.php?codigo=<?php echo $registro[0]?>">
								Retirar da fila de compras	
							</a>
						</td>
					</tr>
					<?php
						}
					?>
				</table>
				<p> Total: <?php echo $valor_total; ?> </p>
				<p> <a href="vendas.php"> Voltar a seleção de televisores </a> </p>
				<p> <a href="recibo_compra.php"> Finalizar venda </a> </p>						
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> TELEV - CONTROL </h6> 
						<h6> Rua do televisor, 666 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 5432 </h6> 
					</div> 
				</div>
		</div>
	</body>
</html>