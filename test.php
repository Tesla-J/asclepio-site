<?php
require_once("data_manager.php");

$boletins = new Boletins();
echo (string) $boletins->getAllFromBoletim();
?>
