<?php
include_once 'conexao.php';
$Filtro=isset($_POST['Filtro'])?$_POST['Filtro']: "";#filtro da pesquisa

$result_encarregados=$conexao->query("SELECT * FROM encarregado where Nome_completo like '%$Filtro%' order by Nome_completo");
	

	$data= mysqli_num_rows($result_encarregados); #mostra a contagem de registros

//print "Resultado da pesquisa com a letra <strong>$Filtro</strong><br><br>";

			print "$data registros encontrados.";
			print"<br><br>";

	foreach($result_encarregados as $rows_enc) {
		
		$BI_Encarregado=$rows_enc['BI_Encarregado'];
		$Nome_completo=$rows_enc['Nome_completo'];
		$Email=$rows_enc['Email'];
		$Telefone=$rows_enc['Telefone']; 
		$Sexo=$rows_enc['Sexo'];
		$Morada=$rows_enc['Morada'];
		
		
 
echo "<tr>";
echo " <td>$BI_Encarregado</td> <td>$Nome_completo</td> <td>$Email</td> <td>$Telefone</td> <td>$Sexo</td> <td>$Morada</td> ";
echo "<td><a href='edit.php?BI_Encarregado=$BI_Encarregado'><i class='material-icons green-text'>edit</i></a></td>"; 
echo"<td><a href='del.php?BI_Encarregado=$BI_Encarregado'><i class='material-icons red-text'>delete</i></a></td>";
echo "</tr>";
}

?>