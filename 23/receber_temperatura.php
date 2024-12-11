<html>

               <head>

               </head>

               <body>

                              <h1> Verificador de Temperaturas </h1>

                              <?php                                

                                            $vet_temperaturas_dias = array ();

                                           

                                            $soma_temperaturas = 0;

                                            for ($cont = 1; $cont <= 5; $cont++) {                                                 

                                                           $vet_temperaturas_dias[$cont] = $_GET["temperatura_dia".$cont];

                                                           $soma_temperaturas = $soma_temperaturas + $vet_temperaturas_dias[$cont];

                                            }                                          

                                            $media_temperaturas = $soma_temperaturas / 5;                                      

                                            $maior_temperatura = -60;

                                            $menor_temperatura = 60;

                                            $total_dias_temperatura_inferior_media = 0;

                                            for ($cont = 1; $cont <= 5; $cont++) {                                                 

                                                           if ($vet_temperaturas_dias[$cont] > $maior_temperatura) {

                                                                          $maior_temperatura = $vet_temperaturas_dias[$cont];

                                                           }                                                         

                                                           if ($vet_temperaturas_dias[$cont] < $menor_temperatura) {

                                                                          $menor_temperatura = $vet_temperaturas_dias[$cont];

                                                           }                                                         

                                                           if ($vet_temperaturas_dias[$cont] < $media_temperaturas) {

                                                                          $total_dias_temperatura_inferior_media++;

                                                           }

                                            }                                          

                                            echo "<p> Menor temperatura: $menor_temperatura </p>";

                                            echo "<p> Maior temperatura: $maior_temperatura </p>";

                                            echo "<p> Temperatura média: $media_temperaturas </p>";

                                            echo "<p> Número de dias com temperatura inferior à média: $total_dias_temperatura_inferior_media </p>";
                              ?>
               </body>
</html>