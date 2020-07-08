<?php
session_start();
include_once("conexao.php");


$nome=filter_input(INPUT_POST, 'nomeCertificado',FILTER_SANITIZE_STRING);
$tipo=filter_input(INPUT_POST, 'tipoCertificado',FILTER_SANITIZE_STRING);
$cod_usuario=$_SESSION['cod_usuario'];

$horas=filter_input(INPUT_POST, 'horasCertificado',FILTER_SANITIZE_NUMBER_INT);
echo "Nome: $nome <br>";
echo "Tipo: $tipo <br>";
echo "Horas: $horas <br>";

$query_criar_certificado="INSERT INTO certificado (nome_certificado,  horas_certificado, tipo_certificado, data_criacao, usuario_cod_usuario) VALUES ('$nome', '$horas', '$tipo', NOW(), $cod_usuario)";

if(mysqli_query($conn, $query_criar_certificado)){


	$query_registro_alteracao = "INSERT INTO alteracao_status_certificado (enum_status_anterior, enum_status_posterior, data_alteracao, usuario_cod_usuario, certificado_cod_certificado) VALUES (NULL, 0, NOW(), $cod_usuario, (select max(cod_certificado) from certificado))";
	mysqli_query($conn, $query_registro_alteracao);


	$_SESSION['msg'] = "<p style='color:green;'>Certificado cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

mysqli_close($conn);
?>