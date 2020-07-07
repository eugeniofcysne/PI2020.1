<?php
session_start();
include_once("conexao.php");


$nome=filter_input(INPUT_POST, 'nomeCertificado',FILTER_SANITIZE_STRING);
$tipo=filter_input(INPUT_POST, 'tipoCertificado',FILTER_SANITIZE_STRING);

$horas=filter_input(INPUT_POST, 'horasCertificado',FILTER_SANITIZE_NUMBER_INT);
echo "Nome: $nome <br>";
echo "Tipo: $tipo <br>";
echo "Horas: $horas <br>";

$result_certificado="INSERT INTO certificado (nome_certificado,  horas_certificado, tipo_certificado, data_criacao, usuario_cod_usuario) VALUES ('$nome', '$horas', '$tipo', NOW(), 2)";

if(mysqli_query($conn, $result_certificado)){
	echo "New record created successfully";
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

mysqli_close($conn);
?>