<html>
    <head>

    </head>
    <body>
        <h1>Tabela Dinâmica</h1>

        <table border="2">
            <?php
                for($cont = 1; $cont <= 10; $cont++) {
            ?>
                
                <tr>
                    <td>
                       Estou contando
                    </td>
                    <td>
                       <?php echo $cont; ?>
                    </td>
                </tr>
                
            <?php
                }
            ?>
        </table>
    </body>
</html>