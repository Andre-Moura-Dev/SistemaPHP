<?php
	session_start();
	
	$conectar = mysqli_connect ("localhost", "root", "", "mini-blog");
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];	
		
	$sql_consulta = "SELECT login_user,	senha_user FROM usuarios
					 WHERE 
					       login_user = '$login' 
					 AND 
					       senha_user = '$senha'";
					 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows ($sql_consulta);
	
	if ($linhas == 1) {	
		$_SESSION["login"] = $login;
		echo "<script> 
					location.href = ('administracao.php') 
			  </script>";
	}
	else {
		echo "<script> 
				  alert ('Login ou Senha Incorretos! Digite Novamente!!') 
			  </script>";
		echo "<script> location.href = ('Index.php') </script>";
	}
?>