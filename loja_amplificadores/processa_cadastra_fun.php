<?php
    $conectar = mysqli_connect ("localhost", "root", "", "4321");

    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $funcao = $_POST["funcao"];

    $consulta_sql = "SELECT login_funcionario FROM funcionarios
    
                    WHERE login_funcionario = '$login'";

    $resultado_consulta = mysqli_query ($conectar, $consulta_sql);

    $linhas = mysqli_num_rows ($resultado_consulta);

    if($linhas == 1) {
        echo "<script>
                  alert ('Login já cadastrado. Tente outro!')
              </script>";

        echo "<script>
                  location.href = ('cadastra_fun.php')
              </script>";      
    }

    else { //Para o usuário que não existe
        $cadastrar_sql = "INSERT INTO funcionarios (nome_funcionario,
                                      funcao_funcionario,
                                      login_funcionario,
                                      senha_funcionario)
                          VALUES
                                      ('$nome', 
                                       '$funcao', 
                                       '$login', 
                                       '$senha')";

        $resultado_cadastrar = mysqli_query ($conectar, $cadastrar_sql);

        if($resultado_cadastrar == true) {
            echo "<script>
                      alert ('$nome cadastrado com sucesso')
                  </script>";

            echo "<script>
                      location.href = (index.php)
                  </script>";
        }

        else {
           echo "<script> 
					alert ('ocorreu um erro no servidor. Tente de novo') 
			     </script>";
		
			echo "<script> 
					location.href = ('cadastra_fun.php') 
				  </script>"; 
        }
    }
?>