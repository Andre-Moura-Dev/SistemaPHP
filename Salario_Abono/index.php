<html>
    <head>

    </head>
    <body>
        <h1>Salário com abono</h1>

        <form action="recebe_salario.php" method="get">
            <p>
               Informe a idade:
               <input type="text" name="idade">  
            </p>

            <p>
               Informe o sexo: <br>
               <input type="radio" name="sexo" value="m"> Masculino<br>
               <input type="radio" name="sexo" value="f"> Feminino<br> 
            </p>

            <p>
               Informe o salário fixo do Funcionário:
               <input type="text" name="salario">  
            </p>

            <p>
               <input type="submit" value="Calcular"> 
            </p>
        </form>
    </body>
</html>