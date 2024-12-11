<?php
    session_start();

    $conexao = mysqli_connect ("localhost", "root", "", "4321");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    //Mudança no SELECT para buscar o nome, código e função do funcionário
    $consulta_sql = "SELECT login_funcionario, senha_funcionario
                            nome_funcionario, codigo_funcionario, funcao_funcionario
                     
                     FROM funcionarios
                     WHERE
                        login_funcionario = '$login'
                     AND
                        senha_funcionario = '$senha'
                     AND
                        status_funcionario = 'ATIVO'";
                        
    $consulta_resultado = mysqli_query($conexao, $consulta_sql);

    $linhas = mysqli_num_rows($consulta_resultado);

    if($linhas == 1) {

        $registro = mysqli_fetch_row($consulta_resultado);

        //Variáveis de sessão
        $_SESSION["nome_funcionario"] = $registro[0];
        $_SESSION["codigo_funcionario"] = $registro[2];
        $_SESSION["funcao_funcionario"] = $registro[3];

        echo "<script>
                  location.href = ('administracao.php')
              </script>";
    }

    else {
        echo "<script>
                 alert ('Login ou Senha Incorretos! Tente Novamente!')
              </script>";
        echo "<script>location.href = ('index.php') </script>";      
    }
?>