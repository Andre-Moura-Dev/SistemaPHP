<?php
    session_start();

    $conexao = mysqli_connect("localhost", "root", "", "televisores"); //Conexao com o BD

    //Login e Senha Válidos
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    //
    $sql_consulta = "SELECT Cod_Funcionarios, 
                            nome_fun, 
                            login_fun, 
                            senha_fun,
                            funcao_fun,
                            email_fun,
                            cpf_fun,
                            rg_fun,
                            telefone_fun
                    FROM funcionarios
                    WHERE 
                        login_fun = '$login' 
                    AND 
                        senha_fun = '$senha'
                    AND
                        status_fun = 'Ativo'";

    $resultado_consulta = mysqli_query($conexao, $sql_consulta);

    $linhas = mysqli_num_rows($resultado_consulta);

    if($linhas == 1) {
        $registro = mysqli_fetch_row ($resultado_consulta);

		$_SESSION["Cod_Funcionarios"] = $registro[0];
		$_SESSION["nome_fun"] = $registro[1];
		$_SESSION["funcao_fun"] = $registro[4];

        echo "<script>
                 location.href = ('administracao.php')
              </script>";
    }

    else {
        echo "<script>
                 alert ('Login ou Senha Incorretos! Informe Novamente!!')
              </script>";
        echo "<script> location.href = ('index.php') </script>";
    }
?>