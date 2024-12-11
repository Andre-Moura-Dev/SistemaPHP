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
					<h1> RECIBO </h1>
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "4321"); //Conexão com o BD

						$data = date('d/m/Y'); //Capturar a data do sistema
						$cod_fun = $_SESSION["codigo_funcionario"]; //Capturar código do usuário logado
						
						$sql_registro_venda = "INSERT INTO vendas
													(data_venda, funcionarios_codigo_funcionario)
													VALUES ('$data', '$cod_fun')"; //Inserir nova venda

						$resultado_registro_venda = mysqli_query($conectar, $sql_registro_venda); //Extrair o código da pesq acima

						$sql_consulta_ultima_venda = "SELECT codigo_vendas
													  FROM vendas
													  ORDER BY codigo_vendas DESC LIMIT 1";

						$resultado_consulta = mysqli_query($conectar, $sql_consulta_ultima_venda);

						$registro_codigo_venda = mysqli_fetch_row($resultado_consulta);

						$sql_codigo_venda_em_amp = "UPDATE amplificadores
													SET vendas_codigo_vendas = '$registro_codigo_venda[0]',
																	fila_compra_amplificador = 'V'
																WHERE fila_compra_amplificador = 'S'";

						$sql_resultado_alteracao_amp = mysqli_query($conectar, $sql_codigo_venda_em_amp);

						$sql_consulta_recibo = "SELECT
													marca_amplificador,
													modelo_amplificador,
													preco_amplificador
												FROM amplificadores
												WHERE vendas_codigo_vendas = '$registro_codigo_venda[0]'";

						$resultado_consulta = mysqli_query($conectar, $sql_consulta_recibo);
						echo "<p> Venda nº: $registro_codigo_venda[0] </p>";
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
						</tr>
						<?php
							$valor_total = 0;
							while($registro = mysqli_fetch_row($resultado_consulta)) {
						?>

						<tr>
							<td>
								<p>
									<?php echo "$registro[1]"; ?>
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[2]"; ?>
								</p>
							</td>
							<td>
								<p>
									<?php
										echo "$registro[3]";
										$valor_total = $valor_total + $registro[4];
									?>
								</p>
							</td>
						</tr>
						<?php
							}
						?>
					</table>
					<p> Total: <?php echo $valor_total; ?></p>
					<p> <a href="vendas.php"> Fechar recibo </a> </p>
				</div>
						
							
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