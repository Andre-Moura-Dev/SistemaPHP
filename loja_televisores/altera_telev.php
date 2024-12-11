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
					<h1> ALTERAÇÃO DE TELEVISORES </h1>
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "televisores");

						$cod = $_GET["codigo"];

						$sql_pesquisa = "SELECT Cod_televisores,
												tipo_telev,
												marca_telev,
												modelo_telev,
												preco_telev,
												qtd_portas_hdmi_telev,
												qtd_portas_usb_telev,
												qtd_polegadas_telev,
												resolucao_telev 
										 FROM
										 		televisores
										 WHERE Cod_televisores = '$cod'";

						$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

						$registro = mysqli_fetch_row($resultado_pesquisa);
					?>
					<form action="processa_altera_telev.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="codigo" value="<?php echo $cod; ?>">
						<p>
							Tipo: 	<select name="tipo">
										<option value="led">
											<?php
												if($registro[1] == "led") {
													echo "selected";
												}
											?> Led </option>
										<option value="oled">
											<?php
												if($registro[1] == "oled") {
													echo "selected";
												}
											?> Oled </option>
										<option value="Mini_oled">
											<?php
												if($registro[1] == "Mini_oled") {
													echo "selected";
												}
											?> Mini_oled </option>
										<option value="lcd">
											<?php
												if($registro[1] == "Lcd") {
													echo "selected";
												}
											?> Lcd </option>
										<option value="q_led">
											<?php
												if($registro[1] == "qled") {
													echo "selected";
												}
											?> Q_led </option>
										<option value="mini_smart">
										<?php
												if($registro[1] == "mini_smart") {
													echo "selected";
												}
											?> Mini_Smart </option>
								  	</select>
						</p>
						<p>
							Marca: <input type="text" name="marca" required value="<?php echo "$registro[2]"; ?>">
						</p>
						<p>
							Modelo: <input type="text" name="modelo" required value="<?php echo "$regsitro[3]"; ?>">
						</p>
						<p>
							Preço: <input type="text" name="preco" required value="<?php echo "$regsitro[4]"?>; ">
						</p>
						<p>
							<select name="qtd_portas_hdmi">
								<option value="1">
									<?php
										if($registro[5] == "1") {
											echo "selected";
										}
									?> 1 </option>
								<option value="2">
									<?php
										if($registro[5] == "2") {
											echo "selected";
										}
									?> 2 </option>
							</select>
						</p>
						<p>
							<select name="qtd_portas_usb">
								<option value="1">
									<?php
										if($registro[6] == "1") {
											echo "selected";
										}
									?> 1 </option>
								<option value="1">
									<?php
										if($registro[6] == "2") {
											echo "selected";
										}
									?> 2 </option>
								<option value="1">
									<?php
										if($registro[6] == "3") {
											echo "selected";
										}
									?> 3 </option>
							</select>
						</p>
						<p>
							<select name="qtd_polegadas_telev">
								<option value="20">
									<?php
										if($registro[7] == "20") {
											echo "selected";
										}
									?> 20 </option>
								<option value="30">
									<?php
										if($registro[7] == "30") {
											echo "selected";
										}
									?> 30 </option>
								<option value="31">
									<?php
										if($registro[7] == "31") {
											echo "selected";
										}
									?> 31 </option>
								<option value="32">
									<?php
										if($registro[7] == "32") {
											echo "selected";
										}
									?> 32 </option>
								<option value="34">
									<?php
										if($registro[7] == "34") {
											echo "selected";
										}
									?> 34 </option>
							</select>
						</p>
						<p> <input type="submit" value="Alterar Televisor"> </p>	
					</form>
					
					
					
					
				</div>				
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