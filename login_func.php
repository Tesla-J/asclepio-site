<?php
session_start();

header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('data_manager.php');

    //obtendo usuario e senha
    $email = $_POST["email"];
    $password = $_POST['password'];
    $hash_user = hash('sha512', $email, false);
    $hash_password = hash('sha512', $password, false);

    //preparando os locais de procura de correspondência
    $adm_filename = 'default/admin.json';
    $prof_filename = 'default/prof.json';

    $adm_file = fopen($adm_filename, 'r') or die('Unnable to read file.');
    $prof_file = fopen($prof_filename, 'r') or die('Unable to read file');

    //prepparing data to compare

    $adm_data = json_decode(
        fread($adm_file, filesize($adm_filename)),
        true);
    $prof_data = json_decode(
        fread($prof_file, filesize($prof_filename)),
        true);

    fclose($adm_file);
    fclose($prof_file);

    $coordenador = new Coordenador();
    $coordenador->setTable('Coordenador');
    $coordenador_data = json_decode(
        $coordenador->get('Email', $email),
        true);

    //SEARCHING

    if( isset($coordenador_data['Email']) ){
        if($coordenador_data['Email'] == $email && $coordenador_data['Senha'] == $hash_password){
            $_SESSION["username"] = $coordenador_data['Nome_Completo'];
            $_SESSION["bi"] = $coordenador_data['BI_Coordenador'];
            $_SESSION["email"] = $coordenador_data['Email'];
            $_SESSION["home"] = "coordenador";

            $data = "Coordenador";
            $_SESSION["permission"] = $data;
        }
        else{
            $data = 'NONE';
        }
    }
    else if( $prof_data['username'] == $hash_user && $prof_data['password'] == $hash_password){
        if(filter_var($prof_data['enabled'], FILTER_VALIDATE_BOOLEAN)){
            $data = 'Professor';
            $_SESSION["permission"] = $data;
            $_SESSION["home"] = "telaprofessorgeral";
        }else{
            $data = "DISABLED";
        }
    }
    else if( $adm_data['username'] == $hash_user && $adm_data['password'] == $hash_password){
        $data = 'Administrador';
        $_SESSION["permission"] = $data;
        $_SESSION["home"] = "Admin";
    }
    else{
        $data = 'NONE';
    }

    echo json_encode($data);
}
else header("location: index");
?>
