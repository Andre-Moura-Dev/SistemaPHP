<?php
    $conexao = mysqli_connect("localhost", "root", "", "televisores");

    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $funcao = $_POST["funcao"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $tel = $_POST["telefone"];
    
    $sql_pesquisa = "SELECT login_fun FROM funcionarios
                     WHERE login_fun = '$login'";

    $resultado_pesquisa = mysqli_query($conexao, $sql_pesquisa);

    $linhas = mysqli_num_rows($resultado_pesquisa);

    if($linhas == 1) {
        echo "<script>
                 alert ('Login já cadastrado. Tente outro!')
              </script>";

        echo "<script>
                 location.href = ('cadastra_fun.php')
              </script>";
    }
    else {//Campo para o usuário que não possui cadastro
        $sql_cadastrar = "INSERT INTO funcionarios 
                                     (nome_fun,
                                      funcao_fun,
                                      login_fun,
                                      senha_fun,
                                      email_fun,
                                      cpf_fun,
                                      rg_fun,
                                      telefone_fun)
                         VALUES
                                      ('$nome',
                                      '$funcao',
                                      '$login',
                                      '$senha',
                                      '$email',
                                      '$cpf',
                                      '$rg',
                                      '$tel')";

        $resultado_cadastrar = mysqli_query($conexao, $sql_cadastrar);
        
        if($resultado_cadastrar == true) {
            echo "<script> 
					alert ('$nome cadastrado com sucesso') 
				  </script>";
			
			echo "<script> 
					location.href = ('cadastra_fun.php') 
				  </script>";
        }
        else {
            echo "<script> 
					alert ('ocorreu um erro no servidor. Tente de novo!') 
			     </script>";
		
			echo "<script> 
					location.href = ('cadastra_fun.php') 
				  </script>";
        }
    }
?>