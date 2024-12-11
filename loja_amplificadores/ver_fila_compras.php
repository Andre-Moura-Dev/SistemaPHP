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
					<h1> ROCK N´ROLL </h1>
					<h1> Amplificadores </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> AMPLIFICADORES </h1>
				<?php
					$conexao = mysqli_connect("localhost", "root", "", "4321");

					$sql_consulta = "SELECT
										  codigo_amplificadores,
										  marca_amplificador,
										  modelo_amplificador,
										  tipo_amplificador,
										  preco_amplificador
									 FROM amplificadores
									 WHERE fila_compra_amplificador = 'S'";

					$resultado_consulta = mysqli_query($conexao, $sql_consulta);
				?>

				<table width="100%">
					<tr height="50px">
						<td>
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
						   Ação
						</td>
					</tr>

					<?php
						$valor_total = 0; //Variável de Imcremento
						while($registro = mysqli_fetch_row($resultado_consulta)) {

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
									<?php
										echo $registro[3];
									?>
								</td>

								<td>
									<?php
										echo $registro[4];
										$valor_total = $valor_total + $registro[4]; //Acumular a varíavel para somar os preços dos amplificadores
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
				<p> <?php echo $valor_total?> </p>
				<p> <a href="vendas.php"> Voltar a seleção de amplificadores </a> </p>
				<p> <a href="recibo_compra.php"> Finalizar venda </a> </p>						
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
	</body>
</html>