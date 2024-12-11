<html>
    <head>

    </head>
    <body>
        <h1>Calculadora</h1>
        

        <?php
            //Entrada de Dados - Leitura dos números
            $valor1 = $_GET["valor1"];
            $valor2 = $_GET["valor2"];

            //Processamento - cálculo da soma
            $soma = $valor1 + $valor2;

            //Processamento - calculo da subtração
            $subtracao = $valor1 - $valor2;

            //Processamento - calculo da multiplicação
            $multiplicacao = $valor1 * $valor2;

            //Processamento - calculo da divisão
            $divisao = $valor1 / $valor2;

            //Saída de Dados - resultado da soma
            echo "<ul>
                    <li>A Soma é: $soma</li>
                    <li>A Subtracao é: $subtracao</li>
                    <li>A Multiplicação é: $multiplicacao</li>
                    <li>A Divisão é: $divisao</li>
                  </ul>";
        ?>
    </body>
</html>