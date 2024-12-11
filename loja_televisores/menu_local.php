<?php
	if ($_SESSION["funcao_fun"] == "Administrador") {
?>

<ul>
	<li><a href="administracao.php" class="active">Administração</a></li>
	<li><a href="lista_fun.php" class="active">Funcionários</a></li>
	<li><a href="lista_telev.php" class="active">Televisores</a></li>
	<li><a href="vendas.php" class="active">Vendas</a></li>    
	<li><a href="relatorios.php" class="active">Relatorios</a></li>
	<li><a href="logout.php" class="active">Sair</a></li>	
</ul>

<?php
	}

	else if ($_SESSION["funcao_fun"] == "estoquista") {
?>

<ul>
	<li><a href="administracao.php" class="active">Administração</a></li>
	<li><a href="lista_telev.php">Televisores</a></li>	
	<li><a href="logout.php" class="active">Sair</a></li>
</ul> 

<?php		
	}

	else {
?>

<ul>
	<li><a href="administracao.php" class="active">Administração</a></li>
	<li><a href="vendas.php">Vendas</a></li>   
	<li><a href="logout.php" class="active">Sair</a></li>
</ul> 

<?php		
	}
?>