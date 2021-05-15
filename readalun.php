<?php
include_once 'conexao.php';
$Filtro=isset($_POST['Filtro'])?$_POST['Filtro']: "";#filtro da pesquisa

$result_cursos= "SELECT A.*, E. `Nome_Completo` AS Encarregado FROM `Aluno` AS A INNER JOIN `Encarregado` AS E ON A.`BI_Encarregado` = E.`BI_Encarregado` WHERE A. `Nome_Completo` LIKE \"%$Filtro%\" ORDER BY A.`Nome_Completo` ASC";
$resultado_cursos = mysqli_query($conexao, $result_cursos);
$data= mysqli_num_rows($resultado_cursos);#mostra a contagem de registros




print "Resultado da pesquisa com a letra <strong><b>$Filtro</b></strong><br><br>";

			print "<b>$data</b> Registros encontrados.";
			print"<br><br>";



	foreach ( $resultado_cursos as $rows_alunos){

		$BI= $rows_alunos['BI'];
		$Nome_Completo= $rows_alunos['Nome_Completo'];
		$Email= $rows_alunos['Email'];
		$Telefone= $rows_alunos['Telefone'];
		$Sexo= $rows_alunos['Sexo'];
		$Turma= $rows_alunos['Turma'];
		$Morada= $rows_alunos['Morada'];
		$Curso= $rows_alunos['Curso'];
		$Data_Nascimento= $rows_alunos['Data_Nascimento'];
		$aux=$rows_alunos['Encarregado'];



echo "<tr>";
echo " <td>$Nome_Completo</td> <td>$Email</td> <td>$Telefone</td> <td>$Sexo</td> <td>$Turma</td> <td>$Morada</td> <td>$Curso</td> <td>$Data_Nascimento</td> <td>$aux</td> ";
echo "<td><a href='editalun.php?BI=$BI'><i class='material-icons green-text'>edit</i></a></td>";
echo"<td><a href='delalun.php?BI=$BI'><i class='material-icons red-text'>delete</i></a></td>";
echo "</tr>";
}

?>












 <!--"SELECT a.*, e. `Nome_completo` AS encarregado FROM `aluno` AS a
		INNER JOIN `encarregado` AS e ON a.`BI_Encarregado` = e.`BI_Encarregado` where Nome like '%$Filtro%'
		ORDER BY a.`Nome` ASC";
;<td>$aux</td>
		-->
