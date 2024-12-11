<html>
    <body>

    </body>
    <head>
        <h1>Triângulo</h1>

        <?php
            //Entrada de Dados - Leitura dos lados
            $l1 = $_GET["lado1"];
            $l2 = $_GET["lado2"];
            $l3 = $_GET["lado3"];

            if(($l1 + $l2 >= $l3) and ($l1 + $l3 >= $l2) and ($l2 + $l3 >= $l1)) {
                echo "<p> Os valores informados formam um triângulo</p>";
                //Identificar o tipo
                if(($l1 == $l2) and ($l1 == $l3)) {
                    //Informar Equilátero
                    echo "<p> Do tipo equilátero</p>";
                }
                else if(($l1 == $l2) or ($l1 == $l3) or ($l2 == $l3)) {
                    //Informar Isósceles
                    echo "<p> Do tipo isósceles</p>";
                }
                else {
                    //Informar Escaleno
                    echo "<p> Do tipo escaleno</p>";
                }
            }
            else {
                echo "<p> Os valores informados não formam um triângulo</p>";
            }
        ?>
    </head>
</html>