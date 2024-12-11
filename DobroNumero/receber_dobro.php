<html>
    <head>

    </head>
    <body>
        <h1>Dobro Número_2</h1>

        <?php
            //Entrada de Dados
            $numero = $_GET["numero"];

            //Processamento
            $dobro = $numero * 2;

            //Saída de Dados
            if($dobro == 48) {
                echo "<p> O dobro do $numero é 48</p>";
            } else {
                echo "<p> O dobro do $numero não é 48.</p>";
            }
        ?>
    </body>
</html>