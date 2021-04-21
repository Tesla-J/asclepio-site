<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>


<?php

$BI_coodernador=filter_input(INPUT_GET,'BI_Coordenador',FILTER_SANITIZE_NUMBER_INT);
/*echo '<h3>Tem certeza que quer excluir este resgistro?</h3>';
echo "<a href='deletefunc.php?BI_Coordenador=$BI_coodernador'>Sim</a>|";
echo "<a href='funciconsulta.php'>Não</a>";*/
echo "
    <script src='scripts/deletefunc.js'></script>
    <script>
        if(confirm('Deseja mesmo apagar esta conta?')){
            deleter.delete('$BI_coodernador');
        }
        else{
            history.back();
        }
    </script>
";


?>



</body>
</html>
