<html>

               <head>

               </head>

               <body>

                              <h1> Verificador de Temperaturas </h1>

                              <p>                      

                                            <form method="get" action="receber_temperatura.php">

                                                           <?php

                                                                          for ($cont = 1; $cont <= 10; $cont++) {

                                                           ?>

                                                                                         Temperatura do  <?php echo $cont?>º dia:

                                                                                         <input type="text" name="temperatura_dia<?php echo $cont?>"> <br>

                                                           <?php

                                                                          }

                                                           ?>

                                                           <input type="submit">                                              

                                            </form>

                              </p>

               </body>

</html>