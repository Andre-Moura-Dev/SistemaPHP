<?php
    $conexao = mysqli_connect("localhost", "root", "", "4321");

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $preco = $_POST["preco"];
    $tipo = $_POST["tipo"];
    $foto = $_FILES["foto"];

    $foto_nome = "img/".$foto["name"];
    move_uploaded_file($foto["tmp_name"], $foto_nome);

    $sql_cadastrar = "INSERT INTO amplificadores (marca_amplificador,
                                            modelo_amplificador,
                                            preco_amplificador,
                                            tipo_amplificador,
                                            foto_amplificador)
                      VALUES
                                              ('$marca',
                                               '$modelo',
                                               '$preco',
                                               '$tipo',
                                               '$foto_nome')";

    $sql_resultado_cadastrar = mysqli_query($conexao, $sql_cadastrar);

    if($sql_resultado_cadastrar == true) {
        echo "<script>
                 alert('$modelo cadastrado com sucesso')
              </script>";

        echo "<script>
                 location.href = ('cadastra_amp.php')
              </script>";
    }

    else {
        echo "<script>
                 alert ('Ocorreu um erro no servidor ao tentar cadastrar')
              </script>";

        echo "<script>
                 location.href = ('cadastra_amp.php')
              </script>";
    }
?>