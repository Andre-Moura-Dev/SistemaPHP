<?php
	session_start(); // Conectar o PHP aos demais arquivos
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
					<h1> ALTERAÇÃO DE AMPLIFICADORES </h1>
					<?php
						$conexao = mysqli_connect("localhost", "root", "", "4321");

						$codigo = $_GET["codigo"];

						$sql_pesquisa = "SELECT
											marca_amplificador,
											modelo_amplificador,
											tipo_amplificador,
											preco_amplificador
										 FROM
										 	amplificadores
										 WHERE codigo_amplificadores = '$codigo'";

						$resultado_pesquisa = mysqli_query($conexao, $sql_pesquisa);

						$registro = mysqli_fetch_row($resultado_pesquisa);
					?>
					<form action="processa_altera_amp.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">

						<p>
							Marca: <input type="text" name="marca" required value="<?php echo $registro[0]; ?>">
						</p>

						<p>
							Modelo: <input type="text" name="modelo" required value="<?php echo $registro[1]; ?>">
						</p>

						<p>
							Preço: <input type="text" name="preco" required value="<?php echo $registro[3]; ?>">
						</p>

						<p> Foto: <input type="file" name="foto"> </p>

						<p>
							Tipo: <select name="tipo">
									<option value="guitarra"
										<?php
											if($registro[2] == "guitarra") {
												echo "selected";
											}
										?> > Guitarra </option>

									<option value="baixo"
										<?php
											if($registro[2] == "baixo") {
												echo "selected";
											}
										?> > Contra-baixo </option>	

									<option value="violao"
										<?php
											if($registro[2] == "violao") {
												echo "selected";
											}
										?> > Violão <option>
								  </select>
						</p>
						<p> <input type="submit" value="Alterar Amplificador"> </p>
					</form>
					
					
					
					
					
					
					
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