<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>


<?php

$BI_coodernador=filter_input(INPUT_GET,'BI_coordenador',FILTER_SANITIZE_NUMBER_INT);
echo '<h3>Tem certeza que quer excluir este resgistro?</h3>';
echo "<a href='deletefunc.php?id=$BI_coodernador'>Sim</a>|";
echo "<a href='funciconsulta.php'>Não</a>";


?>



</body>
</html>
