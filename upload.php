<?php
require "phpspreadsheet/spreadsheet/vendor/autoload.php";
require_once "data_manager.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_FILES['boletim']) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_COOKIE['bi'])){
	$file_name=$_FILES['boletim']['name'];
	$file_size=$_FILES['boletim']['size'];
	$file_tmp=$_FILES['boletim']['tmp_name'];
	$file_type=$_FILES['boletim']['type'];
	$tmp = explode('.',$_FILES['boletim']['name']);
	$file_ext=strtolower(end($tmp));

	$target_dir='documents/';
	$target_name = basename($file_name);

	move_uploaded_file($file_tmp, $target_dir . $target_name);

    $boletim_table = new Boletim();
    $boletim_table->addNewBoletim($target_dir . $target_name, $_COOKIE['bi']);
    /*$data_array = $boletim_table->getBoletimById(5);
	$boletim_manager = new BoletimManager($data_array['Arquivo']);
    $boletim_manager->toTable();
    echo chr(0x40);
    echo $boletim_manager->toJSON() . "</br>";
    $boletim_manager->getAllNames();
    echo $boletim_manager->namesToJSON() . "</br>";*/
    header('location: enviarnotas.php');
}

?>
