<?php	
	$conectar = mysqli_connect ("localhost", "root", "", "televisores");	
	$cod = $_GET["codigo"];	
	
	$sql_altera = "UPDATE televisores 		
				   SET 		fila_compra_telev = 'S'
				   WHERE 	Cod_Televisores = '$cod'";
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
				alert ('Amplificador colocado na fila de compra com sucesso') 
			  </script>";
		echo "<script> 
				 location.href = ('vendas.php') 
			  </script>";
		exit();
	}  
	else
	{    
		echo "<script> 
				alert ('Ocorreu um erro no servidor. 
				O televisor não foi colocado na fila de compras. Tente de novo') 
			</script>";
		echo "<script> 
				location.href ('vendas.php') 
			 </script>";
	}
?>