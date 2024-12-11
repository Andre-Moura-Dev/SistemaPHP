<html>
    <head>

    </head>
    <body>
        <h1>Reajuste Salarial</h1>

        <?php
            //Entrada de Dados - Leitura do salário
            $salario = $_GET["salario"];

            //Processamento - Calculo do reajuste
            $resultado = $salario + ($salario * 0.1);

            //Saída de Dados - Mostrar o reajuste Salarial
            echo "<p> O Salário Reajustado é: $resultado</p>";
        ?>
    </body>
</html>