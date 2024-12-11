<html>
    <head>

    </head>
    <body>
        <h1>Tabuada</h1>

        <?php
            $numero = $_GET["numero"];


            echo "<h2> Tabuada do $numero. </h2>". "<br>";
        ?>
        <table border="3">
                <tr>
                    <td>
                       <?php echo "$numero x $cont ="?>
                    </td>
                    <td>
                       <?php echo "$resultado";?>
                    </td>
                </tr>

            <?php
                for($cont = 1; $cont <= 10; $cont++) {
                    echo "$resultado = $numero x $cont";
            ?>

                <tr>
                    <td>
                       <?php echo "$numero x $cont ="?>
                    </td>
                    <td>
                       <?php echo "$resultado";?>
                    </td>
                </tr>

            <?php
                }
            ?>    
            
        </table>
            
             
        
    </body>
</html>