<?php

include_once 'conexao.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $BI_coordenador = $_POST['BI_Coordenador'];
    $queryDelete=$conexao->query("delete from Coordenador where BI_Coordenador='$BI_coordenador';");
    echo "<script>console.log('$BI_coodernador');
    console.log('$queryDelete');</script>";

    if(mysqli_affected_rows($queryDelete) == 1):
	       header("Location:funciconsulta.php");
    else:
        echo '<script type="text/javascript"> alert("Não foi possível concluir a acção"); </script>'
        header('location:funciconsulta.php');
    endif;
}
else{
    header('location:funciconsulta.php');
}
