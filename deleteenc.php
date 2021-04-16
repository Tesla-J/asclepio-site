<?php
include_once 'conexao.php';
session_start();
$BI_Encarregado=$_GET['BI_Encarregado'];
$queryDelete = $conexao->query("delete from encarregado where BI_Encarregado='$BI_Encarregado' ");

if ( mysqli_affected_rows($conexao)> 0):
	$_SESSION['mensagem']="Registro eliminado com sucesso!";
        header("Location:encarregadoconsulta.php");
    else:
    	$_SESSION['mensagem']="Erro ao eliminar!";
    	header("Location:encarregadoconsulta.php");
        endif;
	
?>