<html>
    <head>

    </head>
    <body>
        <h1>Totais Aprovados ou Reprovados</h1>

        <form action="calcular_Aprovado_Reprovado.php" method="get">
            <?php
                for($cont = 1; $cont <= 10; $cont++) {
            ?>

            <p>
               Sexo: <br>
               <input type="radio" name="sexo1" value="m" checked> Masculino <br>
               <input type="radio" name="sexo1" value="f"> Feminino <br>
            

              <?php
                for($contnotas = 1; $contnotas <= 4; $contnotas++) {
                    
              ?>

                Nota<?php echo $contnotas; ?>:
                <input type="text" name="nota<?php echo"$cont$contnotas"?>"> <br>

             <?php
                }
             ?>

             <?php
                }
             ?>

            </p> 

            <p>
              <input type="submit" value="Calcular"></input>
            </p>
        </form>
    </body>
</html>