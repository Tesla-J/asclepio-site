<?php
session_start();
include_once 'conexao.php';


$BI=filter_input(INPUT_POST, 'BI');
$Nome_Completo=filter_input(INPUT_POST,'Nome_Completo');
$Email=filter_input(INPUT_POST,'Email');
$Telefone=filter_input(INPUT_POST,'Telefone');
$Sexo=filter_input(INPUT_POST,'Sexo');
$Turma=filter_input(INPUT_POST,'Turma');
$Curso=filter_input(INPUT_POST,'Curso');
$Data_Nascimento=filter_input(INPUT_POST,'Data_Nascimento');
$Morada=filter_input(INPUT_POST,'Morada');




$queryUpdate=$conexao->query("update aluno set BI='$BI', Nome_Completo='$Nome_Completo', Email='$Email',Telefone='$Telefone', Sexo='$Sexo', Turma='$Turma', Curso='$Curso', Data_Nascimento='$Data_Nascimento', Morada='$Morada' where BI='$BI'");
$affected_rows=mysqli_affected_rows($conexao);
        if($affected_rows > 0):
        	$_SESSION['mensagem']="Registro actualizado com sucesso!";
        header("Location:alunoconsulta.php");
    else:
    	$_SESSION['mensagem']="Erro ao actualizar!";
    	header("Location:alunoconsulta.php");
        endif;
