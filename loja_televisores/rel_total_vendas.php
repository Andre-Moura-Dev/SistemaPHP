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
				<h1> RELATÓRIO DE TOTAL DE VENDAS </h1>
				<?php
					$conectar = mysqli_connect ("localhost", "root", "", "televisores");			
					
					$data = date ('d/m/Y');
					
					$sql_consulta_total_vendas = "SELECT preco_telev
												  FROM televisores
												  WHERE fila_compra_telev = 'V'";
					
					$resultado_consulta = mysqli_query ($conectar, $sql_consulta_total_vendas);		
						
			
					$valor_total = 0;
					while ($registro_total_vendas = mysqli_fetch_row ($resultado_consulta))
					{
						$valor_total = $valor_total + $registro_total_vendas[0];
				
					}
				?>
				<p> Total de vendas até a presente data: <?php echo $valor_total; ?>
				<p> <a href="relatorios.php"> Voltar </a> </p>
			
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> TELEV - CONTROL </h6> 
						<h6> Rua do Televisor, 666 -- E-mail: contato@telev_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>