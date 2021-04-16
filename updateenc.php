<?php
session_start();
include_once 'conexao.php';


$BI_Encarregado=filter_input(INPUT_POST, 'BI_Encarregado');
$Nome_Completo=filter_input(INPUT_POST,'Nome_Completo');
$Email=filter_input(INPUT_POST,'Email');
$Telefone=filter_input(INPUT_POST,'Telefone');
$Sexo=filter_input(INPUT_POST,'Sexo');
$Morada=filter_input(INPUT_POST,'Morada');

$queryUpdate=$conexao->query("update encarregado set BI_Encarregado='$BI_Encarregado' , Nome_Completo='$Nome_Completo', Email='$Email',Telefone='$Telefone', Sexo='$Sexo',  Morada='$Morada' where BI_Encarregado='$BI_Encarregado'");
$affected_rows=mysqli_affected_rows($conexao);
        if($affected_rows > 0):
        $_SESSION['mensagem']="Registro actualizado com sucesso!";
        header("Location:encarregadoconsulta.php");
    else:
    	$_SESSION['mensagem']="Erro ao actualizar!";
    	header("Location:encarregadoconsulta.php");
        endif;
       






























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


