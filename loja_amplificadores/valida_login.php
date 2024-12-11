<?php
    if(isset($_SESSION["nome_funcionario"])) {
        echo $_SESSION["nome_funcionario"];
    }
    else {

        echo "<script>
                  alert('Você não está logado!!!')
              </script>";

        echo "<script>
                  location.href = ('index.php')
              </script>";      
    }
?>