<html>
    <head>

    </head>
    <body>
        <h1>Media das idades</h1>

        <form action="receber_idade.php" method="get">
            <?php
                for($cont = 1; $cont <= 10; $cont) {
            ?>


                <p>
                  Idade <?php echo $cont;?>:
                  <input type="text" name="idade">
                </p>
                


            <?php
                }
            ?>
            
            <p>
              <input type="submit" value="Calcular Media das idades"> 
            </p>
        </form>
    </body>
</html>