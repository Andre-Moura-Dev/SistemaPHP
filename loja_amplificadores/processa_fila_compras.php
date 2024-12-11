<?php
    $conectar = mysqli_connect("localhost", "root", "", "4321"); //Conexão com o BD

    $cod = $_GET["codigo"]; // Receber o código do produto enviado via link

    /*Alterar o campo fila_compra_amp de "N"
    para "S" 
    em função do código
    recebido acima*/
    $sql_altera = "UPDATE amplificadores
                   SET    fila_compra_amplificador = 'S'
                   WHERE  codigo_amplificadores = '$cod'";

    $sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);

    //Se alterou msg de sucesso, vai p/ vendas.php
    if($sql_resultado_alteracao == true) {
        echo "<script>
                alert ('Amplificador colocado na fila de compra com sucesso')
              </script>";

        echo "<script>
                location.href = ('vendas.php')
              </script>";
    }

    //Se não alterou msg de erro, vai p/ vendas
    else {
        echo "<script>
                alert ('Ocorreu um erro no servidor. Tente de novo')
              </script>";

        echo "<script>
                location.href = (vendas.php)
              </script>";
    }
?>