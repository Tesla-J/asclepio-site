<?php
session_start();

header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once("data_manager.php");

    if(isset($_POST['email']) && isset($_POST["password"])){
        $alunos = new Aluno();
        $alunos->setTable('Aluno');
        $data_aluno = json_decode($alunos->get('Email', $_POST['email']), true);

        $encarregado = new Encarregado();
        $encarregado->setTable('Encarregado');
        $data_encarregado = json_decode($encarregado->get('Email', $_POST['email']), true);

        if(isset($data_aluno['Email'])){
            if($data_aluno['Email'] == $_POST['email'] && $data_aluno['Senha'] == hash('sha512', $_POST['password'], false)){

                $_SESSION['permission'] = "Aluno";
                $_SESSION["username"] = $data_aluno['Nome_Completo'];
                $_SESSION["home"] = "telaaluno";
                $_SESSION["bi"] = $data_aluno["BI"];
                $_SESSION["email"] = $data_aluno["Email"];

                $data = $_SESSION["permission"];
            }
        }

        if(isset($data_encarregado['Email'])){
            if($data_encarregado['Email'] == $_POST['email'] && $data_encarregado['Senha'] == hash('sha512', $_POST['password'], false)){

                $_SESSION['permission'] = "Encarregado";
                $_SESSION["username"] = $data_encarregado['Nome_Completo'];
                $_SESSION["home"] = "encarregado_home";
                $_SESSION["bi"] = $data_encarregado["BI"];
                $_SESSION["email"] = $data_encarregado["Email"];
                $_SESSION["bi_encarregado"] = $data_encarregado["BI_Encarregado"];

                $data = $_SESSION["permission"];
            }
        }

        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode('NONE');
        }
    }
}

else header("location: index");
?>
