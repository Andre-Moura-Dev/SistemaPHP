<html>
    <head>

    </head>
    <body>
        <h1>Média dos alunos do sexo feminino e masculino</h1>

        <?php
            $soma_notas_mulheres = 0;
            $contf = 0;
            $soma_notas_homens = 0;
            $contm = 0;

            for($cont = 1; $cont <= 5; $cont++) {
                $nota = $_GET["nota$cont"];
                $sexo = $_GET["sexo$cont"];

                if($sexo == "f") {
                   $soma_notas_mulheres = $soma_notas_mulheres + $nota;
                   $contf = $contf + 1;
                }
                else {
                    $soma_notas_homens = $soma_notas_homens + $nota;
                    $contm = $contm + 1;
                }
            }

            $media_notas_homens = $soma_notas / $contm;
            $media_notas_mulheres = $soma_notas / $contf;

            echo "<p> A média das notas dos homens é $media_notas_homens</p>";
            echo "<p> A média das notas das mulheres é $media_notas_mulheres</p>";
        ?>
    </body>
</html>