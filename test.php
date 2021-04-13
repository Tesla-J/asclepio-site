<?php
require_once("data_manager.php");

$boletim = new BoletimManager('documents/teste.xlsx');
//$boletim->toTable();
//echo '<p style="color:red;">' . '</p';

$line = $boletim->get('Rita Ora');
print_r($line);

?>
