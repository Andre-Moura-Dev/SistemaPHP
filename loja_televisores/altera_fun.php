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
					<p align="right"> Olá <?php include "valida_login.php";?> </p>
					<?php include "menu_local.php"; ?>               
				</div>
			</div>
			<div id="conteudo_especifico" class="centralisar">
				<h1> ALTERAÇÃO DE USUÁRIOS </h1>
				<?php
					$conexao = mysqli_connect("localhost", "root", "", "televisores");

					$cod = $_GET["codigo"];

					$sql_consulta = "SELECT nome_fun, 
											funcao_fun,
											login_fun,
											senha_fun,
											email_fun,
											cpf_fun,
											rg_fun,
											telefone_fun,
											status_fun
									 FROM funcionarios
									 WHERE Cod_Funcionarios = '$cod'";

					$resultado_pesquisa = mysqli_query($conexao, $sql_consulta);

					$registro = mysqli_fetch_row($resultado_pesquisa);
				?>
				<form action="processa_altera_fun.php" method="post">
					<input type="hidden" name="codigo" value="<?php echo $cod; ?>">
					<?php
						if($registro[1] == "administrador") {
					?>

						<input type="hidden" name="funcao" value="<?php echo $registro[1]; ?>">

						<p>
							Senha:
							<input type="password" name="senha" value="<?php echo $registro[3]; ?>" required>
						</p>

					<?php
						}
						else {
					?>

						<p>
							Nome:
							<input type="text" name="nome" value="<?php echo "$registro[0]"; ?>" required>
						</p>
						<p>
							Função:
							<input type="radio" name="funcao" value="estoquista"
								<?php
									if($registro[1] == "estoquista") {
										echo "checked";
									} 
								?>> Estoquista
							<input type="radio" name="funcao" value="vendedor"
								<?php
									if($registro[1] == "vendedor") {
										echo "checked";
									}
								?>> Vendedor
						</p>
						<p>
							Login:
							<input type="text" name="login" value="<?php echo "$registro[2]"; ?>" required>
						</p>
						<p>
							Senha:
							<input type="password" name="senha" value="<?php echo "$registro[3]"; ?>" required>
						</p>
						<p>
							Email:
							<input type="email" name="email" value="<?php echo "$registro[4]"; ?>" required>
						</p>
						<p>
							Cpf:
							<input type="text" name="cpf" value="<?php echo "$registro[5]"; ?>">
						</p>
						<p>
							Rg:
							<input type="text" name="rg" value="<?php echo "$registro[6]"; ?>">
						</p>
						<p>
							Telefone:
							<input type="tel" name="telefone" value="<?php echo "$registro[7]"; ?>">
						</p>

						<p>
							Status:
							<select name="status">
									<option value="ativo"
										<?php
											if ($registro[4] == "ativo") {
												echo "selected";
											}
										?> > Ativo 
									</option>
									<option value="inativo"<?php
										if ($registro[4] == "inativo") {
											echo "selected";
										}
										?> > Inativo 
									</option>
								</select>
						</p>
					<?php
						}
					?>
					<p> <input type="submit" value="Alterar Funcionário">  </p>	
				</form>



								
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> TELEV - CONTROL </h6> 
						<h6> Rua do Televisor, 777 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 5432 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>