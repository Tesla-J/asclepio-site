<?php
session_start();
include_once 'conexao.php';
$BI_coordenador=$_SESSION['BI_coordenador'];


$Nome_completo=$_POST['Nome_completo'];
$Email=$_POST['Email'];
$Telefone=$_POST['Telefone']; 
$Sexo=$_POST['Sexo'];
$Data_nascimento=$_POST['Data_nascimento'];
$Morada=$_POST['Morada'];

$queryUpdate= $conexao->query("update coordenador set Nome_completo='Nome_completo', Email='$Email',Telefone='$Telefone',Sexo='$Sexo',Data_nascimento='$Data_nascimento',Morada='$Morada' where BI_coordenador='$BI_coordenador'");
$affected_rows=mysqli_affected_rows($conexao);
if($affected_rows > 0):
	header("Location:funciconsulta.php");
	endif;
?>
