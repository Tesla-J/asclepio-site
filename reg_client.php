<?php
/*
    You must use AJAX
*/
require_once("data_manager.php");

if(isset($_SERVER["REQUEST_METHOD"]) == "POST"){
    echo json_encode($_POST);
    switch($_POST["type"]){
        case "enc": $enc = new Encarregado();
        break;

        case "aluno": $aluno = new Aluno();
        break;

        default: echo "Invalid!";
    }
}
?>
