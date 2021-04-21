<?php
session_start();
include_once 'conexao.php';
if(isset($_SESSION['BI_coordenador'])){
    $BI_coordenador=$_SESSION['BI_coordenador'];
}else{
    $BI_coordenador = $_POST['BI_coordenador'];
}

$Nome_completo=$_POST['Nome_completo'];
$Email=$_POST['Email'];
$Telefone=$_POST['Telefone'];
$Data_nascimento=$_POST['Data_nascimento'];
$Morada=$_POST['Morada'];

$queryUpdate= $conexao->query("update Coordenador set Nome_Completo='$Nome_completo', Email='$Email',Telefone='$Telefone',Data_Nascimento='$Data_nascimento',Morada='$Morada' where BI_Coordenador='$BI_coordenador'");
$affected_rows=mysqli_affected_rows($conexao);
if($affected_rows > 0):
	header("Location:funciconsulta.php");
	endif;
?>
