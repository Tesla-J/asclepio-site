<?php
    require_once("data_manager.php");

    if(isset($_POST['BI'])){
        $func = new Funcionario();
        if($_POST['senha'] == $_POST['senha_confirmation']){
            $func->addNewFuncionario($_POST['BI'], $_POST['nomecompleto'], $_POST['date'], $_POST['sexo'], $_POST['email'], $_POST['telefone'], $_POST['morada'], $_POST['funcao'], $_POST['senha']);
        }
    }

    //location("cadastrofunc.html");
?>
