<html>
    <head>

    </head>
    <body>
        <h1>Média dos alunos do sexo Masculino</h1>

        <?php
            for($cont = 1; $cont <= 5; $cont++) {

            
        ?>

        <form action="receber_media" method="get">
            <p>
                Nota:
                <input type="text" name="nota <?php echo "$cont";?>"><br><br>
            

                Nome:<?php echo $cont;?>:
               <input type="text" name="nome"><br><br>
            

                informe o seu sexo:<br>
               <input type="radio" name="sexo1" value="m" checked> Masculino
               <input type="radio" name="sexo1" value="f"> Feminino
            </p>
            
        </form>


        <?php
            }
        ?>
    </body>
</html>