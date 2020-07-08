<?php
session_start();
include_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$texto_query = ("SELECT * FROM `USUARIO` 
WHERE `email` = '$email' AND `SENHA`= '$senha' AND `perfil_cod_perfil` = (SELECT `cod_perfil` from perfil where `descricao_perfil`='Aluno')");
$result = mysqli_query($conn, $texto_query);

$row_usuario = mysqli_fetch_assoc($result);

if(count($row_usuario)>0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome_usuario'] = $row_usuario['nome'];
    $_SESSION['cod_usuario'] = $row_usuario['cod_usuario'];    
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header('location:aluno.php');
}else{
    echo "<p style='color:red;'>Usuário ou Senha Incorreta</p>";
}

mysqli_close($conn);
?>