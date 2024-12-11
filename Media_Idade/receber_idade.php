<html>
    <head>

    </head>
    <body>
        <h1>Média das idades</h1>

        <?php
            $soma = 0;

            for($cont = 1; $cont <= 10; $cont++) {
                $idade = $_GET["idade $cont"];
                $soma = $soma + $idade;
            }

            $media_idades = $soma + 1;
        ?>
    </body>
</html>