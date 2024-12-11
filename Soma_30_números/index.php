<html>
    <head>

    </head>
    <body>
        <h1>Soma de 30 Números</h1>

        <form action="mostrar_soma.php" method="get">
            <?php
                for($cont = 1; $cont <= 30; $cont) {
            ?>


                <p>
                  Valor <?php echo $cont;?>:
                  <input type="text" name="num">
                </p>
                


            <?php
                }
            ?>
            
            <p>
              <input type="submit" value="Calcular"> 
            </p>
        </form>
    </body>
</html>