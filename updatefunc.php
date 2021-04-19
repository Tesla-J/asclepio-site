<?php
session_start();
include_once 'conexao.php';


$BI_Coordenador=filter_input(INPUT_POST, 'BI_Coordenador');
$Nome_Completo=filter_input(INPUT_POST,'Nome_Completo');
$Email=filter_input(INPUT_POST,'Email');
$Telefone=filter_input(INPUT_POST,'Telefone');
$Sexo=filter_input(INPUT_POST,'Sexo');
$Data_Nascimento=filter_input(INPUT_POST,'Data_Nascimento');
$Morada=filter_input(INPUT_POST,'Morada');




$queryUpdate=$conexao->query("update Coordenador set Nome_Completo='$Nome_Completo', Morada='$Morada', Sexo='$Sexo', Data_Nascimento='$Data_Nascimento', Telefone='$Telefone', Email='$Email' where BI_Coordenador='$BI_Coordenador'");

$affected_rows=mysqli_affected_rows($conexao);
        if($affected_rows > 0):
        	$_SESSION['mensagem']="Registro actualizado com sucesso!";
        header("Location:funciconsulta.php");
    else:
    	$_SESSION['mensagem']="Erro ao actualizar!";
    	header("Location:funciconsulta.php");
        endif;
