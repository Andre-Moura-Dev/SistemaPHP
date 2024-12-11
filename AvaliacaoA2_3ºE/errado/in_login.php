<?php
	if (isset($_SESSION["codigo"])) 
	{
?>
		<p> <span class="postagem">Seja bem vindo</span> </p>
<?php
	}
	else
	{
		echo "<script> alert ('Você não está logado!') </script>";
		echo "<script> location.href =('index.php') </script>";
	}
?>
<p> <a href="logout.php"> Sair </a> </p>