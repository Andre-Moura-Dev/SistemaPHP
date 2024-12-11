<html>
    <head>

    </head>
    <body>
        <h1>Salário Com Comissão</h1>

        <?php
            //Entrada de Dados - Leitura do salário e da comissão
            $salario = $_GET["salario"];
            $totalvendas = $_GET["totalvendas"];

            //Processamento - Calculo da Comissão e do salário
            $resultado = $salario + ($totalvendas * 0.15);

            //Saída de Dados - Mostrar o Salário e a comissão
            echo "<p> O Seu Salário Final é: $resultado</p>";
        ?>
    </body>
</html>