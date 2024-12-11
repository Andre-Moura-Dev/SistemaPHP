<html>
    <head>

    </head>
    <body>
        <h1>Intervalo</h1>

        <?php
            $v1 = $_GET["v1"];
            $v2 = $_GET["v2"];

            //Processamento

            $v1++;
            for($cont = $v1; $cont = $v2; $cont++) {
                echo "$cont";
            }
        ?>
    </body>
</html>