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
					<p align="right"> Olá <?php include "valida_login.php"; ?>  </p>
					<?php include "menu_local.php"; ?>
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> FUNCIONÁRIOS </h1>
				<p align="right">
					<a href="cadastra_fun.php" class="list">
						Cadastro de funcionários
					</a>				
				</p>
				<?php
					$conexao = mysqli_connect("localhost", "root", "", "televisores");

					$sql_consulta = "SELECT nome_fun, 
											funcao_fun, 
											status_fun,
											email_fun,
											cpf_fun,
											rg_fun,
											telefone_fun
									 FROM funcionarios";

					$sql_resultado = mysqli_query($conexao, $sql_consulta);
				?>

				<table width="100%" border="2">
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
							EMAIL
						</td>
						<td>
							CPF
						</td>
						<td>
							RG
						</td>
						<td>
							TELEFONE
						</td>
						<td>
							AÇÃO
						</td>
					</tr>

					<?php
						while($registro = mysqli_fetch_row($sql_resultado)) {
					?>

						<tr height="50px">
							<td>
								<a href="exibe_fun.php?codigo=<?php echo $registro[3]; ?>">
									<?php echo  $registro[0]; ?>
								</a>
							</td>
							<td>
								<?php echo $registro[1]; ?>
							</td>
							<td>
								<?php echo $registro[2]; ?>
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
								<?php echo $registro[6]; ?>
							</td>
							<td>
								<a href="altera_fun.php?codigo=<?php echo $registro[3]; ?>">
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
						<h6> Rua do Televisor, 666 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 5432 </h6> 
					</div> 
				</div>
				
		</div>
    </body>
</html>