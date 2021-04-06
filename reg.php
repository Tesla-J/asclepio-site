<?php
/*
    You must use XMLHttpRequest
    to send data, It will return OK or FATALITY (yeah, It's from Mortal Combat)
*/
require_once("data_manager.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    switch($_POST["type"]){
        case "enc":
            $enc = new Encarregado();
            $enc->addNewEncarregado(
                $_POST['bi_encarregado'],
                $_POST['nome_completo'],
                $_POST['morada'],
                $_POST['email'],
                $_POST['senha'],
                $_POST['telefone'],
                $_POST['sexo'],
                $_POST['bi_coordenador']
            );
            echo "OK";
            break;

        case "aluno":
            $aluno = new Aluno();
            $aluno->addNewAluno(
                $_POST['turma'],
                $_POST['senha'],
                $_POST['bi'],
                $_POST['sexo'],
                $_POST['curso'],
                $_POST['nome_completo'],
                $_POST['email'],
                $_POST['data_nascimento'],
                $_POST['telefone'],
                $_POST['morada'],
                $_POST['bi_coordenador'],
                $_POST['bi_encarregado']
            );
            echo "OK";
            break;

        case 'coord':
            $coordenador = new Coordenador();
            $coordenador->addNewCoordenador(
                $_POST['bi'],
                $_POST['nome_completo'],
                $_POST['morada'],
                $_POST['sexo'],
                $_POST['data_nascimento'],
                $_POST['telefone'],
                $_POST['email'],
                $_POST['senha']
            );
            echo 'OK';
            break;

        default: echo "FATALITY";
    }
}
?>
