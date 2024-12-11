<?php
	session_start ();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/menu.css">
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
				<h1> TELEVISORES </h1>
			
				
				<p align="right"> 
					<a href="cadastra_telev.php" class="aa"> 
						Cadastrar Televisor
					</a> 
				</p>
				<?php 
					$conectar = mysqli_connect("localhost", "root", "", "televisores");

					$sql_consulta = "SELECT Cod_televisores,
											tipo_telev,
											marca_telev,
											modelo_telev,
											preco_telev,
											qtd_portas_hdmi_telev,
											qtd_portas_usb_telev,
											resolucao_telev
									 FROM 	televisores";

					$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
				?>


				<table width="100%">
					<tr height="50px">
						<td>
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
							QtdPortasHdmi
						</td>
						<td>
							QtdPortasUsb
						</td>
						<td>
							Resolucao
						</td>							
						<td>
							Ação
						</td>
					</tr>
					<?php		
						while ($registro = mysqli_fetch_row($resultado_consulta))
						{
					?>						
					<tr height="50px">
						<td>
							<?php echo $registro[0]; ?>
						</td>
						<td>
							<a href="exibe_amp.php?codigo=<?php echo $registro[1]?>"> 
								<?php 
									echo $registro[2];
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
							<a href="altera_amp.php?codigo=<?php echo $registro[0]?>">
								Alterar	
							</a>							
						</td>
					</tr>
					<?php
						}
					?>
				</table>


			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> TELEV - CONTROL </h6> 
						<h6> Rua do Televisor, 777 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 5432 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>