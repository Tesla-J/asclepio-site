<?php
require "phpspreadsheet/spreadsheet/vendor/autoload.php";
require_once "data_manager.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


if(isset($_FILES['pauta'])){
	$file_name=$_FILES['pauta']['name'];
	$file_size=$_FILES['pauta']['size'];
	$file_tmp=$_FILES['pauta']['tmp_name'];
	$file_type=$_FILES['pauta']['type'];
	$tmp = explode('.',$_FILES['pauta']['name']);
	$file_ext=strtolower(end($tmp));

	$target_dir='documents/';
	$target_name = basename($file_name);

	move_uploaded_file($file_tmp, $target_dir . $target_name);

    $boletim_table = new Boletins();
    $boletim_table->addNewBoletim($target_dir . $target_name, "1", 2022);
    $data_array = $boletim_table->getBoletimById(5);
	$boletim_manager = new BoletimManager($data_array['Arquivo']);
    $boletim_manager->toTable();
    echo chr(0x40);
    echo $boletim_manager->toJSON() . "</br>";
    $boletim_manager->getAllNames();
    echo $boletim_manager->namesToJSON() . "</br>";
}

?>
