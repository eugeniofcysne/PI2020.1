<?php
session_start();
include_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$teste = true;

$texto_query = ("SELECT * FROM `USUARIO` 
WHERE `email` = '$email' AND `SENHA`= '$senha' AND `perfil_cod_perfil` = (SELECT `cod_perfil` from perfil where `descricao_perfil`='Secretaria')");
$result = mysqli_query($conn, $texto_query);

try{
    $row_usuario = mysqli_fetch_assoc($result);
} catch (Exception $e){
    echo "<p style='color:red;'>Usuário ou Senha Incorreta</p>";
    $teste = false;
}

if(teste){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome_usuario'] = $row_usuario['nome'];
    $_SESSION['cod_usuario'] = $row_usuario['cod_usuario'];    
	header('location:secretaria.php');
}

mysqli_close($conn);
?>