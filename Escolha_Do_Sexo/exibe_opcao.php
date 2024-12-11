<html>
    <head>
        
    </head>
    <body>
        <h1> Escolha do Sexo </h1>
        

        <?php
            //Entrada de Dados - Recebimento da opção do Sexo
            $sexo = $_GET["sexo"];

            //Processamento e Saída - Decisão de executar um outro comando echo
            switch($sexo) {
                case "m":
                    echo "<p> Foi escolhido o sexo Masculino</p>";
                    break;
                case "f":
                    echo "<p> Foi escolhido o sexo Feminino</p>";
                    break;   
            }
        ?>
    </body>
</html>