<?php
$conectar = mysqli_connect("localhost", "root", "", "televisores");

$cod = $_POST["codigo"];
$tipo_telev = $_POST["tipo"];
$marca_telev = $_POST["marca"];
$modelo_telev = $_POST["modelo"];
$preco_telev = $_POST["preco"];
$qtd_portas_hdmi_telev = $_POST["qtd_portas_hdmi"];
$qtd_portas_usb_telev = $_POST["qtd_portas_usb"];
$qtd_polegadas_telev = $_POST["qtd_polegadas_telev"];
$resolucao_telev = $_POST["resolucao_telev"];

// Função para buscar a resolução se não for fornecida
function buscarResolucao($conectar, $cod) {
    $pesquisa_resolucao = "SELECT resolucao_telev
                           FROM televisores
                           WHERE Cod_televiores = '$cod'"; // Corrigido o erro de SQL
    $resultado_pesquisa = mysqli_query($conectar, $pesquisa_resolucao);
    
    if($resultado_pesquisa && mysqli_num_rows($resultado_pesquisa) > 0) {
        $registro = mysqli_fetch_row($resultado_pesquisa);
        return $registro[0]; // Retorna a resolução encontrada
    }
    return null; // Caso não encontre a resolução
}

// Verifica se a resolução foi fornecida no formulário
if ($resolucao_telev == "") {
    $resolucao_telev = buscarResolucao($conectar, $cod); // Busca a resolução no banco
}

// Atualização dos dados do televisor
$sql_altera = "UPDATE televisores
               SET tipo='$tipo_telev',
                   marca='$marca_telev',
                   modelo='$modelo_telev',
                   preco='$preco_telev',
                   qtd_portas_hdmi='$qtd_portas_hdmi_telev',
                   qtd_portas_usb='$qtd_portas_usb_telev',
                   qtd_polegadas_telev='$qtd_polegadas_telev',
                   resolucao_telev='$resolucao_telev'
               WHERE Cod_televiores = '$cod'";

$sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);

if($sql_resultado_alteracao == true) {
    echo "<script>
            alert('$resolucao_telev alterada com sucesso') 
          </script>";
    echo "<script> 
            location.href = ('lista_telev.php') 
          </script>";
} else {
    echo "<script> 
            alert('Ocorreu um erro no servidor. 
                Dados do televisor não foram alterados. Tente de novo') 
          </script>";
    echo "<script> 
            location.href = ('altera_telev.php?codig=$cod') 
          </script>";
}
?>