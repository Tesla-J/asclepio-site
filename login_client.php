<?php
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
                $data = array('username' => $data_aluno['Nome_Completo'], 'bi' => $data_aluno['BI'], 'type' => 'al');
            }
        }

        if(isset($data_encarregado['Email'])){
            if($data_encarregado['Email'] == $_POST['email'] && $data_encarregado['Senha'] == hash('sha512', $_POST['password'], false)){
                $data = array('username' => $data_encarregado['Nome_Completo'], 'bi' => $data_encarregado['BI_Encarregado'], 'type' => 'enc');
            }
        }

        if(isset($data)){
            echo (string) json_encode($data);
        }
        else{
            echo (string) json_encode('NONE');
        }
    }
}
?>
