<?php
    require_once("data_manager.php");

    if(isset($_POST['email']) && isset($_POST["password"])){
        $alunos = new Aluno();
        $encarregado = new Encarregado();
        $data_alunos = $alunos->getAllFromAluno();
        $data_encarregados = $encarregado->getAllFromEncarregado();

        foreach($data_alunos as $row){
            if($row['Email'] == $_POST['email'] && $row['Senha'] == hash('sha512', $_POST['password'], false)){
                echo 'Welcome'. $row['Nome_Completo'];
                return;
            }
        }

        foreach ($data_encarregados as $row) {
            if($row['Email'] == $_POST['email'] && $row['Senha'] == hash('sha512', $_POST['password'], false)){
                echo 'Welcome'. $row['Nome_Completo'];
                return;
            }
        }
    }
?>
