<?php
session_start();
include_once("conexao.php");

if (isset($_GET['cod_certificado'])) {
    $cod_certificado = $_GET['cod_certificado'];
}
$cod_usuario=$_SESSION['cod_usuario'];
$query_registro_alteracao = "
INSERT INTO alteracao_status_certificado 
(enum_status_anterior, enum_status_posterior, data_alteracao, usuario_cod_usuario, certificado_cod_certificado) 
VALUES 
(0, 1, NOW(), $cod_usuario, $cod_certificado);";

if(mysqli_query($conn, $query_registro_alteracao)){
    
    echo "<p style='color:green;'>Certificado aprovado com sucesso</p>";
    echo "</html><a href=\"index.php\">Voltar para página principal</a><br>";
    echo "</html><a href=\"processar_certificado_coord.php\">Voltar para página de certificados</a>";
    
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

mysqli_close($conn);
?>