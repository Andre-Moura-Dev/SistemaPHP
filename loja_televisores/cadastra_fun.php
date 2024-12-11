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
				
				<h1> CADASTRO DE FUNCIONÁRIOS </h1>

				<form method="post" action="processa_cadastra_fun.php">
					<table class="centralizar">	
						<tr>
							<td>
								<p> Nome: </p>
							</td>
							<td>
								<p> <input type="text" name="nome" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Função:  </p>
							</td>
							<td>
								<p> 
									<input type="radio" value="estoquista" name="funcao" checked> Estoquista
									<input type="radio" value="vendedor" name="funcao"> Vendedor  </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Login:  </p>
							</td>
							<td>
								<p> <input type="text" name="login" required>  </p>
							</td>
							
						</tr>
						<tr>
							<td>
								<p> Senha:  </p>
							</td>
							<td>
								<p> <input type="password" name="senha" required>  </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Email:  </p>
							</td>
							<td>
								<p> <input type="email" name="email" required>  </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Cpf:  </p>
							</td>
							<td>
								<p> <input type="text" name="cpf" required>  </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Rg:  </p>
							</td>
							<td>
								<p> <input type="text" name="rg" required>  </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Telefone:  </p>
							</td>
							<td>
								<p> <input type="tel" name="telefone" required>  </p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p> <input type="submit" value="Cadastrar Funcionário">  </p>
							</td>
						</tr>
					</table>
				</form>
				
								
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