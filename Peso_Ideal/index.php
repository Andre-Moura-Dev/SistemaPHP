<html>
    <head>

    </head>
    <body>
        <h1>peso Ideal</h1>

        <form action="calcula_peso.php" method="get">
            <p>
               Sexo:
               <br>
               <input type="radio" name="sexo" value="m"> Masculino <br>
               <input type="radio" name="sexo" value="f"> Feminino
            </p>

            <p>
               Altura:
               <input type="text" name="altura" required>
            </p>

            <p>
               <input type="submit" value="Calcular"> 
            </p>
        </form>
    </body>
</hmtl>