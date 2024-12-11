<?php
	session_start (); //Conexão entre o PHP e o MySql
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
					<h1> TELEVISORES </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>              
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> EXIBIÇÃO DE DADOS DE USUÁRIOS </h1>
				<?php 
					$conexao = mysqli_connect("localhost", "root", "", "televisores");

					$cod = $_GET["codigo"];

					$sql_pesquisa = "SELECT nome_fun, 
											login_fun,
											funcao_fun,
											status_fun,
											email_fun,
											cpf_fun,
											rg_fun,
											telefone_fun
									 FROM funcionarios
									 WHERE Cod_Funcionarios = '$cod'";

					$resultado_sql = mysqli_query($conexao, $sql_pesquisa);

					$registro = mysqli_fetch_row($resultado_sql);

					echo "<p> Nome: $registro[0] </p>";
					echo "<p> Login: $registro[1]</p>";
					echo "<p> Função: $registro[2]</p>";
					echo "<p> Status: $registro[3]</p>";
					echo "<p> Email: $registro[4]</p>";
					echo "<p> Cpf: $registro[5]</p>";
					echo "<p> Rg: $registro[6]</p>";
					echo "<p> Telefone: $registro[7]</p>";
				?>
				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> TELEV - CONTROL </h6> 
						<h6> Rua do Televisor, 666 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 5432 </h6>  
					</div> 
				</div>
				
		</div>
    </body>
</html>