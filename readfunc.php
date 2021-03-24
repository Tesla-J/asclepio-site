<?php
include_once 'conexao.php';
$Filtro=isset($_POST['Filtro'])?$_POST['Filtro']: ""; #filtro da pesquisa
$querySelect=$conexao->query("select * from coordenador where nome like '%$Filtro%' order by nome ");#seleciona os dados da tabela cliente e como serão feita as buscas
$data=mysqli_num_rows($querySelect);#mostra a contagem de registros

print "Resultado da pesquisa com a letra <strong>$Filtro</strong><br><br>";

			print "$data registros encontrados.";
			print"<br><br>";

while ($registros=$querySelect->fetch_assoc() ):#exibe todos dados
$BI_coordenador=$registros['BI_coordenador'];
$Nome_completo=$registros['Nome_completo'];
$Email=$registros['Email'];
$Telefone=$registros['Telefone']; 
$Sexo=$registros['Sexo'];
$Data_nascimento=$registros['Data_nascimento'];
$Morada=$registros['Morada'];
 
echo "<tr>";
echo "<td>$BI_coordenador</td> <td>$Nome_completo</td> <td>$Email</td> <td>$Telefone</td> <td>$Morada</td> <td>$Sexo</td> <td>$Data_nascimento</td>" ;
echo "<td><a href='editfunc.php?BI_coordenador=$BI_coordenador'><i class='material-icons green-text'>edit</i></a></td>"; 
echo"<td><a href='del.php?BI_coordenador=$BI_coordenador'><i class='material-icons red-text'>delete</i></a></td>";
echo "</tr>";
	
endwhile;
?>