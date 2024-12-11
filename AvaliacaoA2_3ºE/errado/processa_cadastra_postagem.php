<?php
	$conectar = mysqli_connect ("localhost", "root", "", "mini-blog");
	
	$titulo = $_POST["titulo"];
	$texto = $_POST["texto"];	
			
	$sql_cadastrar = "INSERT INTO postagens (titulo_posta, texto_posta) 
					  VALUES ('$titulo', '$texto')";
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
	
	if ($sql_resultado_cadastrar == true) { 
	
		echo "<script> alert ('$titulo cadastrado com sucesso') </script>";
		echo "<script> location.href = ('cadastra_postagem.php') </script>";
		
		exit();
	}
	else { 
	
		echo "<script> alert ('ocorreu um erro no servidor ao tentar cadastrar') </script>";
		
		echo "<script> location.href = ('Cadastra_postagem.php') </script>";
	
	}
?>