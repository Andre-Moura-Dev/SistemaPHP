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
					<h1> GLAUCIMAR </h1>
					<h1> TELEVISORES </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>           
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> CADASTRO DE TELEVISORES </h1>
			
				<form method="post" action="processa_cadastra_telev.php" enctype="multipart/form-data">
					<p> Marca:  <input type="text" name="marca" required> </p>
					<p> Modelo:  <input type="text" name="modelo" required> </p>
					<p> Preço:  <input type="text" name="preco" required> </p>
						<p>
							Quantidade portas USB: 	<select name="qtd_portas_usb">
														<option value="escolher">escolher</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
											   		</select>
						</p>

						<p>
							Quantidade portas HDMI: <select name="qtd_portas_hdmi">
														<option value="escolher">escolher</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>
						</p>
						
						<p>
								Polegadas: <select name="qtd_polegadas_telev">
												<option value="escolher">escolher</option>
												<option value="20">20</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="34">34</option>
										   </select>
						</p>

						<p> Resolução: <select name="resolucao_telev">
											<option value="escolher">escolher</option>
											<option value="480p">480p</option>
											<option value="480i">480i</option>
											<option value="720p">720p</option>
											<option value="1080p">1080p</option>
											<option value="1080i">1080i</option>
											<option value="2160p">2160p</option>
									   </select>

						</p>

					<p> 
						Tipo:  <select name="tipo">
									<option value="escolher">escolher</option>
									<option value="led"> Led </option>
									<option value="oled"> Oled </option>
									<option value="mini_oled"> Mini_oled </option>
									<option value="lcd"> Lcd </option>
									<option value="q_led"> Q_led </option>
									<option value="mini_smart"> Mini_Smart </option>
								</select>
					</p>
					<p> <input type="submit" value="Cadastrar Televisor"> </p>								
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
		</div>
    </body>
</html>