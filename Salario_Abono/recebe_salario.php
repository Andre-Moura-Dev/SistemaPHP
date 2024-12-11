<html>
    <head>

    </head>
    <body>
        <h1>Salário com abono</h1>

        <?php
            //Entrada de Dados
            $idade = $_GET["idade"];
            $sexo = $_GET["sexo"];
            $salario = $_GET["salario"];

            //Processamento
            if(($sexo == "m") and ($idade >= 30)) {
                $salario_final = $salario + 100;
            }
            else if(($sexo == "m") and ($idade < 30)) {
                $salario_final + $salario + 50;
            }
            else if(($sexo == "f") and ($idade < 25)) {
                $salario_final + $salario + 100;
            }

            //Saída de Dados
            echo "<p>O salário final informado é de $salario_final</p>";
        ?>
    </body>
</html>