<html>
    <head>

    </head>
    <body>
        <h1>peso Ideal</h1>

        <?php
            //Entrada
            $sexo = $_GET["sexo"];
            $altura = $_GET["altura"];

            //Processamento
            if($sexo == "m") {
               $peso = 72.7 * $altura - 58; 
            } else {
               $peso = 62.1 * $altura - 44.7; 
            }

            //Saída
            echo "<p> Seu peso ideal é $peso</p>";
        ?>
    </body>
</hmtl>