<html>
    <head>

    </head>
    <body>
        <h1>Média do Aluno</h1>

        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $nota3 = $_GET["n3"];

            $media = $nota1 + $nota2 + $nota3 / 3;
            
            if($media > 7) {
               echo "<p> O aluno com média $media está Aprovado!</p>";
            } else {
                echo "<p> O aluno com média $media está Reprovado!</p>";
            }
        ?>
    </body>
</html>