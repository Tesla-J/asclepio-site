<?php
include_once 'conexao.php';
$Filtro=isset($_POST['Filtro'])?$_POST['Filtro']: "";#filtro da pesquisa

$sql="SELECT * FROM Encarregado WHERE  Nome_Completo like '%$Filtro%' order by Nome_completo";
$resultado = mysqli_query($conexao, $sql);

	$data= mysqli_num_rows($resultado); #mostra a contagem de registros

//print "Resultado da pesquisa com a letra <strong>$Filtro</strong><br><br>";

			print "<b>$data registros encontrados.<b>";
			print"<br><br>";

	 	foreach($resultado  as $rows_enc){

		$BI_Encarregado=$rows_enc['BI_Encarregado'];
		$Nome_Completo=$rows_enc['Nome_Completo'];
		$Email=$rows_enc['Email'];
		$Telefone=$rows_enc['Telefone'];
		$Sexo=$rows_enc['Sexo'];
		$Morada=$rows_enc['Morada'];



echo "<tr>";
echo "<td>$BI_Encarregado</td><td>$Nome_Completo</td> <td>$Email</td> <td>$Telefone</td> <td>$Sexo</td> <td>$Morada</td> ";
echo "<td><a href='editenc.php?BI_Encarregado=$BI_Encarregado'><i class='material-icons green-text'>edit</i></a></td>";
echo"<td><a href='delenc.php?BI_Encarregado=$BI_Encarregado'><i class='material-icons red-text'>delete</i></a></td>";
echo "</tr>";

};
?>
