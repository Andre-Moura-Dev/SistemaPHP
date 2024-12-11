<?php
	$conectar = mysqli_connect ("localhost", "root", "", "mini-blog");	
	
	$cod = $_POST["codigo_noticia"];
	$titulo = $_POST["titulo"];
	$texto = $_POST["texto"];		
						
	$sql_altera = "UPGRADE postagens 		
					   SET 		titulo_posta='$titulo', 
								texto_posta = '$texto'								
					   WHERE 	cod_posta = '$cod'";
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
				alert ('$manchete alterada com sucesso') 
			  </script>";
		echo "<script> 
				 location.href = ('lista_postagem.php') 
			  </script>";
		exit();
	}  
	else
	{    
		echo "<script> 
				alert ('Ocorreu um erro no servidor') 
			</script>";
		echo "<script> 
				location.href ('lista_postagem.php') 
			 </script>";
	}	

?>