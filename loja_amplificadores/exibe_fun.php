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
					<h1> ROCK N´ROLL </h1>
					<h1> Amplificadores </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>              
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> EXIBIÇÃO DE DADOS DE USUÁRIOS </h1>
				
				<?php
					//Conexão com o Banco De Dados 
					$conexao = mysqli_connect("localhost", "root", "", "4321");

					$codigo = $_GET["codigo"];

					//Consulta no Banco de Dados na tabela Funcionário
					$sql_consulta = "SELECT
									 	nome_funcionario,
										login_funcionario,
										funcao_funcionario,
										status_funcionario
									FROM
										funcionarios
									WHERE
										codigo_funcionario = '$codigo'
					";

					//Resultado da consulta na tabela funcionário
					$sql_resultado = mysqli_query($conexao, $sql_consulta);

					//Registro do resultado da consulta na tabela funcionário
					$registro = mysqli_fetch_row($sql_resultado);

					echo "<p> Nome: $registro[0] </p>";
					echo "<p> Login: $registro[1] </p>";
					echo "<p> Função: $registro[2] </p>";
					echo "<p> Status: $registro[3] </p>";
				?>
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> ETB - Escola Técnica de Brasília </h6> 
						<h6> Curso - Técnico em Informática </h6> 
						<h6> Disciplina - Desenvolvimento Web II </h6> 
					</div> 
				</div>
				
		</div>
    </body>
</html>