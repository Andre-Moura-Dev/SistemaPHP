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
					<h1> RECIBO </h1>
					<?php
						$conectar = mysqli_connect ("localhost", "root", "", "televisores");			
						
						// inserindo um registro novo na tabela venda para iniciar o
						// processo de registro/cadastro de uma nova venda
						$data = date ('d/m/Y');
						$cod_fun = $_SESSION['cod_fun'];
						$sql_registro_venda = "INSERT INTO vendas
												(data_ven, funcionarios_cod_fun)
												VALUES ('$data','$cod_fun')";
												
						$resultado_registro_venda = mysqli_query ($conectar, $sql_registro_venda);
						
						//	pesquisando e extraindo da pesquisa feita o código da última venda para colocá-lo posteriormente na tabela dos AMPLIFICADORES para identificar em que venda o amplificador está
						
						$sql_consulta_ultima_venda = "SELECT cod_ven
						FROM vendas ORDER BY cod_ven DESC LIMIT 1";
						
						$resultado_consulta = mysqli_query ($conectar, $sql_consulta_ultima_venda);		
												
						$registro_cod_ven = mysqli_fetch_row ($resultado_consulta);
						
						
						// alteração na do campo chave estrangeira na tabela AMPLIFICADORES
						// servirá para saber em que venda está (ou estão) o(s) amplificador(es)
						
						$sql_codigo_venda_em_amp = "UPDATE televisores
													SET vendas_cod_ven = '$registro_cod_ven[0]',
																    fila_compra_amp = 'V'
																WHERE fila_compra_amp = 'S'";
																
						$resultado_alteracao_amp = mysqli_query ($conectar, $sql_codigo_venda_em_amp);
						
						// exibição dos dados do recibo					
						
						$sql_consulta_recibo = "SELECT 
														marca_telev, 
														modelo_telev, 
														preco_telev,
														qtd_portas_hdmi_telev,
														qtd_portas_usb_telev 
												FROM televisores 
												WHERE vendas_cod_ven = '$registro_cod_ven[0]'";
						
						$resultado_consulta = mysqli_query ($conectar, $sql_consulta_recibo);						
						echo "<p> Venda nº: $registro_cod_ven[0]</p>";
						echo "<p> Data: $data</p>";
					?>
					
					<table width="100%">
						<tr>
							<td>
								<p> Marca </p>
							</td>
							<td>
								<p> Modelo </p>
							</td>							
							<td>
								<p> Preço </p>
							</td>
							<td>
								<p> Quantidade de portas hdmi </p>
							</td>
							<td>
								<p> Quantidade de portas usb </p>
							</td>
							<td>
								<p> Polegadas </p>
							</td>
							<td>
								<p> Resolucao </p>
							</td>
						</tr>
						<?php
							$valor_total = 0;
							while ($registro = mysqli_fetch_row($resultado_consulta))
							{
						?>						
						<tr>
							<td>
								<p>
									<?php echo "$registro[0]"; ?>
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[1]";	?>										
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[3]";	?>										
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[4]";	?>										
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[5]";	?>										
								</p>
								<td>
								<p>
									<?php echo "$registro[6]";	?>										
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[7]";	?>										
								</p>
							</td>
							</td>
							<td>
								<p>
									<?php 
										echo "$registro[2]"; 
										$valor_total = $valor_total + $registro[2];
									?>
								</p>
							</td>							
						</tr>
						<?php
							}
						?>
					</table>
					<p> Total: <?php echo $valor_total; ?> </p>

					<p> <a href="vendas.php"> Fechar recibo </a> </p>
				</div>
						
							
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