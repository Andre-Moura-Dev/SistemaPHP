<html>
    <head>

    </head>
    <body>
        <h1>Média Ponderada</h1>

        <?php
            //Entrada de Dados - Leitura das notas
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nota4 = $_GET["nota4"];

            //Processamento - Calcular Média Ponderada
            $media = (($nota1 * 1) + ($nota2 * 2) + ($nota3 * 3) + ($nota4 * 4)) / 10;

            //Saída de Dados - Mostrar a Média do Aluno
            echo "<p> A Média Ponderada do aluno é: $media</p>";
        ?>
    </body>
</html>