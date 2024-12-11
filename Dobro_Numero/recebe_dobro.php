<html>
    <head>

    </head>
    <body>
        <h1>Dobro do Número</h1>

        <?php
            //Entrada de Dados
            $numero = $_GET["numero"];

            //Processamento
            $dobro = $numero * 2;

            //Saída de Dados
            if($dobro < 35) {
               echo "<p> O dobro do $numero informado é o $dobro, que é menor que 35.</p>";
            } else {
               echo "<p> O dobro do $numero informado é o $dobro, que não é menor que 35.</p>";
            }
        ?>
    </body>
</html>