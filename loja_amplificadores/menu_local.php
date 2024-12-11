<?php
    if($_SESSION["funcao_funcionario"] == "administrador") {
?>
<ul>
    <li><a href="administracao.php" class="active">Administração<a></li>
    <li><a href="lista_fun.php" class="active">Funcionários<a></li>
    <li><a href="lista_amp.php">Amplificadores<a></li>
    <li><a href="vendas.php">Vendas<a></li>
    <li><a href="relatorios.php">Relatórios<a></li>
    <li><a href="logout.php" class="active">Sair<a></li>
</ul>
<?php
    }
    else if($_SESSION["funcao_funcionario"] == "estoquista") {
?>
<ul>
    <li><a href="administracao.php" class="active">Administração<a></li>
    <li><a href="lista_amp.php">Amplificadores<a></li>
    <li><a href="logout.php" class="active">Sair<a></li>
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