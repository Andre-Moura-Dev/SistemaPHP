<html>
    <head>

    </head>
    <body>
        <h1>Tabela Dinâmica</h1>

        <form action="gerar_tabela.php" method="get">
            <?php
                $numero = $_GET["numero"];
            ?>

            <?php
                for($cont = 1; $cont <= $numero; $cont++) {
            ?>

            <tr>
                <td>
                   Estou contando
                </td>

                <p>
                   Gerar Tabela de<?php echo $cont; ?>:
                   <input type="text" value="numero"> 
                </p>

                <td>
                   <?php echo $cont; ?>:
                </td>
            </tr>

            <?php
                }
            ?>

            <p>
              <input type="button" value="Gerar Tabela">  
            </p>
        </form>
    </body>
</html>