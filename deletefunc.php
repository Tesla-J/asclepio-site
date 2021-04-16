<?php
session_start();
include_once 'conexao.php';
$BI_Coordenador = filter_input(INPUT_GET,'BI_Coordenador');
$queryDelete=$conexao->query("delete from coordenador where BI_Coordenador='$BI_Coordenador'");
if(mysqli_affected_rows($conexao)> 0):
	$_SESSION['mensagem']="Registro eliminado com sucesso";
	header("Location:funciconsulta.php");
else:
	$_SESSION['mensagem']="Erro ao eliminar o registro";
	header("Location:funciconsulta.php");
endif;