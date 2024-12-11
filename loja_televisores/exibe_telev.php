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
				<h1> EXIBIÇÃO DE TELEVISORES </h1>							
				<?php		
						$conectar = mysqli_connect ("localhost", "root", "", "televisores");
						$codigo_telev = $_GET["codigo"];
						$sql_pesquisa_telev = "SELECT 
													tipo_telev, 
													marca_telev, 
													modelo_telev, 
													preco_telev,
													qtd_portas_hdmi_telev,
													qtd_portas_usb_telev,
													qtd_polegadas_telev,
													polegadas_telev 
											  FROM 
													televisores
											  WHERE 
													cod_telev = '$codigo_telev'";
						$resultado_pesquisa_telev = mysqli_query ($conectar, $sql_pesquisa_telev);

						$registro_telev = mysqli_fetch_row($resultado_pesquisa_telev);
					?>
					<p> <img src="<?php echo $registro_telev[4]; ?>"> </p>
					<?php
						echo "<p> Tipo: $registro_telev[0] </p>";
						echo "<p> Marca: $registro_telev[1]</p>";						
						echo "<p> modelo: $registro_telev[2] </p>";
						echo "<p> Preço: $registro_telev[3]</p>";
						echo "<p> Quantidade Portas Hdmi: $registro_telev[4]</p>";
						echo "<p> Quantidade portas Usb $registro_telev[5]</p>";
						echo "<p> Quantidade polegadas: $registro_telev[6]</p>";
						echo "<p> Polegadas: $registro_telev[7]</p>";
					?>

			</div>	
				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Televisor, 666 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>