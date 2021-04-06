<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once("data_manager.php");

    if(isset($_POST['email']) && isset($_POST["password"])){
        $alunos = new Aluno();
        $encarregado = new Encarregado();
        $data_alunos = $alunos->getAllFromAluno();
        $data_encarregados = $encarregado->getAllFromEncarregado();

        foreach($data_alunos as $row){
            if($row['Email'] == $_POST['email'] && $row['Senha'] == hash('sha512', $_POST['password'], false)){
                $data = array('username' => $row['Nome_Completo'], 'bi' => $row['BI'], 'type' => 'al');
            }
        }

        foreach ($data_encarregados as $row) {
            if($row['Email'] == $_POST['email'] && $row['Senha'] == hash('sha512', $_POST['password'], false)){
                $data = array('username' => $row['Nome_Completo'], 'bi' => $row['BI_Encarregado'], 'type' => 'enc');
            }
        }

        if(isset($data)){
            echo (string) json_encode($data);
        }
        else{
            echo 'NONE';
        }
    }
}
?>
