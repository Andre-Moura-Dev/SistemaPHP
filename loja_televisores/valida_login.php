<?php
    if(isset($_SESSION["nome_fun"]) ) {
        echo $_SESSION["nome_fun"];
    }

    else {
        echo "<script>
                 alert ('Voçê não está logado!!!')
              </script>";

        echo "<script>
                 location.href = ('index.php')
              </script>";
    }
?>