<?php
    $conectar = mysqli_connect("localhost", "root", "", "televisores");

    $tipo_telev = $_POST["tipo"];
    $marca_telev = $_POST["marca"];
    $modelo_telev = $_POST["modelo"];
    $preco_telev = $_POST["preco"];
    $qtd_portas_hdmi_telev = $_POST["qtd_portas_hdmi"];
    $qtd_portas_usb_telev = $_POST["qtd_portas_usb"];
    $qtd_polegadas_telev = $_POST["qtd_polegadas_telev"];
    $resolucao_telev = $_POST["resolucao_telev"];

    $sql_cadastro = "INSERT INTO televisores (tipo_telev, 
                                              marca_telev,
                                              modelo_telev,
                                              preco_telev,
                                              qtd_portas_hdmi_telev,
                                              qtd_portas_usb_telev,
                                              qtd_polegadas_telev,
                                              resolucao_telev)
                                              
                     VALUES                   ('$tipo_telev',
                                               '$marca_telev',
                                               '$modelo_telev',
                                               '$preco_telev',
                                               '$qtd_portas_hdmi_telev',
                                               '$qtd_portas_usb_telev',
                                               '$qtd_polegadas_telev',
                                               '$resolucao_telev')";

    $sql_resultado_cadastro = mysqli_query($conectar, $sql_cadastro);

    if ($sql_resultado_cadastro == true) { 	
		echo "<script>
				alert ('$modelo cadastrado com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('cadastra_telev.php') 
			  </script>";		
	}
	else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";		
		echo "<script> 
				location.href = ('cadastra_telev.php') 
			  </script>";	
	}
?>