<?php

include_once 'conexao.php';
$BI_coordenador = filter_input(INPUT_GET,'BI_coordenador',FILTER_SANITIZE_NUMBER_INT);
$queryDelete=$conexao->query("delete from coordenador where BI_coordenador='$BI_coordenador'");
if(mysqli_affected_rows($conexao)> 0):
	header("Location:funciconsulta.php");
endif;