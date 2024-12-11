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
				<h1> RELATÓRIO DE FUNCIONÁRIOS ATIVOS</h1>
				<?php
					$conectar = mysqli_connect("localhost", "root", "", "televisores");
					
					$sql_pesquisa = "SELECT
											nome_fun,
											funcao_fun
									 FROM
											funcionarios
									 WHERE 
											status_fun = 'ativo'";
					$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);
				?>
				<table width="100%">	
						<tr height="50px">
							<td>
								Nome
							</td>
							<td>
								Função
							</td>
						</tr>
					<?php
						while ($registro = mysqli_fetch_row($resultado_pesquisa)) {
					?>
						<tr height="50px">
							<td>
								<?php echo $registro[0]?>
							</td>
							<td>
								<?php echo $registro[1]?>
							</td>
						</tr>
					<?php
						}
					?>
				</table>
				<p> <a href="relatorios.php"> Voltar </a> </p>						
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