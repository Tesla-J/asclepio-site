<?php
session_start();
include_once 'conexao.php';
$BI=$_GET['BI'];
$queryDelete = $conexao->query("delete from aluno where BI='$BI' ");

if ( mysqli_affected_rows($conexao)> 0):
	$_SESSION['mensagem']="Registro eliminado com sucesso";
	header("alunoconsulta.php");
else:
	$_SESSION['mensagem']="Erro ao eliminar o registro";
	header("alunoconsulta.php");
endif;
?>
