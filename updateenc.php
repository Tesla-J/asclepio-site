<?php
session_start();
include_once 'conexao.php';

if(isset($_SESSION['BI_Encarregado'])){
    $BI_Encarregado=$_SESSION['BI_Encarregado'];
}else{
    $BI_Encarregado = $_POST['BI_Encarregado'];
}

$Nome_completo=$_POST['Nome_completo'];
$Email=$_POST['Email'];
$Telefone=$_POST['Telefone'];
$Sexo=$_POST['Sexo'];
$Morada=$_POST['Morada'];

$queryUpdate= $conexao->query("update encarregado set Nome_completo='$Nome_completo', Email='$Email', Telefone='$Telefone', Sexo='$Sexo', Morada='$Morada' where BI_Encarregado='$BI_Encarregado'");
$affected_rows=mysqli_affected_rows($conexao);
if($affected_rows > 0):
        header("Location:encarregadoconsulta.php");
        endif;
?>

































#session_start();
#include_once 'conexao.php';
#$BI_Encarregado=$_SESSION['BI_Encarregado'];

#$Nome_completo= $_POST['Nome_completo'];
#$Email= $_POST['Email'];
#$Telefone= $_POST['Telefone']; 
#$Sexo= $_POST['Sexo'];
#$Morada= $_POST['Morada']; 

#$queryUpdate= $conexao->query("UPDATE encarregado SET Nome_completo='$Nome_completo', Email='$Email', Telefone='$Telefone',Sexo='$Sexo', Morada='$Morada' WHERE BI_Encarregado='$BI_Encarregado'");
#$affected_rows=mysqli_affected_rows($conexao);
#if($affected_rows > 0):
 #       header("Location:encarregadoconsulta.php");
 #       endif;
?>


