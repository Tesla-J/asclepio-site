<?php

include_once 'conexao.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $BI_coordenador = $_POST['BI_Coordenador'];
    $queryDelete=$conexao->query("delete from Coordenador where BI_Coordenador='$BI_coordenador';");

    if(mysqli_affected_rows($conexao) == 1):
	       echo '';
    else:
        echo 'ERROR!';
    endif;
}
else{
    header('location:funciconsulta.php');
}
