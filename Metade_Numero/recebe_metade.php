<html>
    <head>

    </head>
    <body>
        <h1>Metade de um Número</h1>

        <?php
            //Entrada de Dados
            $numero = $_GET["numero"];

            //Processmento
            $metade = $numero / 2;

            //Saída de Dados
            if($metade > 55) {
               echo "<p> A metade de $numero é maior do que 55.</p>";
            } else {
               echo "<p> A metade de $numero não é maior do que 55.</p>"; 
            }
        ?>
    </body>
</html>