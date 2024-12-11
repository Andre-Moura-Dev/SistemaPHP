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
					<p align="right"> Olá <?php include "valida_login.php"; ?>  </p>
					<?php include "menu_local.php"; ?>
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> FUNCIONÁRIOS </h1>
				<p align="right">
					<a href="cadastra_fun.php">
						Cadastro de funcionários
					</a>				
				</p>
				
				<?php
					$conexao = mysqli_connect("localhost", "root", "", "4321");

					$sql_consulta = "SELECT 
										nome_funcionario,
										funcao_funcionario,
										status_funcionario,
										codigo_funcionario
									 FROM
									 	funcionarios";

					$sql_resultado = mysqli_query($conexao, $sql_consulta);					
				?>

				<table width="100%">
					<tr height="50px">
					   <td>
						  NOME
					   </td>
					   <td>
						  FUNÇÃO
					   </td>
					   <td>
						  STATUS
					   </td>
					   <td>
						  AÇÃO
					   </td>
					</tr>

					<?php
						while ($registro = mysqli_fetch_row($sql_resultado)) {
					?>

							<tr height="50px">
								<td>
								    <a href="exibe_fun.php?codigo=<?php echo $registro[1]; ?>">
								      <?php echo $registro[0]; ?>
								    </a>
								</td>
								<td>
									<?php echo $registro[1]; ?>
								</td>
								<td>
									<?php echo $registro[2]; ?>
								</td>

								<td>
									<a href="altera_fun.php?codigo= <?php echo $registro[3]; ?>">Alterar</a>
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
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
				
		</div>
    </body>
</html>