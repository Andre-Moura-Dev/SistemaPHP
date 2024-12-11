<html>
    <head>

    </head>
    <body>
        <h1>Contador</h1>

        <?php
            $num = $_GET["num"];
        ?>
        
        <h2>Usando o While</h2>

        <?php
            $cont = 1;

            while ($cont <= $num) {
                echo "<p> Estou contando $cont</p>";
                $cont = $cont + 1;
            }
        ?>

        <h2>Usando o DO..While</h2>
            <?php
                $cont = 1;
                do {
                    echo "<p> Estou contando $cont</p>";
                    $cont++;
                } while ($cont <= $num);
            ?>

        <h2>Usando o FOR</h2>
            <?php
                for($cont = 1; $cont <= $num; $cont++) {
                   echo "<p> Estou contando $cont</p>"; 
                }
            ?>    
        
    </body>
</html>