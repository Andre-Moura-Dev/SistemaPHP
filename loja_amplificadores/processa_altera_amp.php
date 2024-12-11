<?php
    $conexao = mysqli_connect("localhost", "root", "", "4321");

    $codigo = $_POST["codigo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $preco = $_POST["preco"];
    $tipo = $_POST["tipo"];
    $foto = $_FILES["foto"];

    if($foto["name"] <> "") {
        $foto_nome = "img/".$foto["name"];
        move_uploaded_file($foto["tmp_name"], $foto_nome);
    }

    else {
        $pesquisa_caminho_foto = "SELECT foto_amplificador
                                    FROM amplificadores
                                    WHERE codigo_amplificador = '$codigo'";

        $resultado_pesquisa = mysqli_query($conexao, $pesquisa_caminho_foto);
        $registro[0] = mysqli_fetch_row($resultado_pesquisa);
        $foto_nome = $registro[0];
    }

    $sql_altera = "UPDATE amplificadores
                    SET marca_amplificador='$marca',
                        modelo_amplificador='$modelo',
                        preco_amplificador='$preco',
                        tipo_amplificador='$tipo',
                        foto_amplificador='$foto_nome'

                    WHERE codigo_amplificadores='$codigo'";

    $sql_resultado_alteracao = mysqli_query($conexao, $sql_altera);

    if($sql_resultado_alteracao == true) {
        echo "<script>
                alert ($modelo alterado com sucesso)
              </script>";

        echo "<script>
                location.href = ('lista_amp.php')
              </script>";
    }

    else {
        echo "<script>
                alert ('Ocorreu um erro no servidor. Tente de novo')
              </script>";

        echo "<script>
                location.href = ('altera_amp.php?codigo=$codigo')
              </script>";
    }
?>