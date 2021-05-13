<?php
header("Content-Type: application/json");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('data_manager.php');

    //obtendo usuario e senha
    $user = $_POST['user'];
    $password = $_POST['password'];
    $hash_user = hash('sha512', $user, false);
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
        $coordenador->get('Email', $user),
        true);

    //SEARCHING

    if( isset($coordenador_data['Email']) ){
        if($coordenador_data['Email'] == $user && $coordenador_data['Senha'] == $hash_password){
            $data = array('username' => $coordenador_data['Nome_Completo'],
                'bi' => $coordenador_data['BI_Coordenador'], 'email' => $coordenador_data['Email']);
        }
        else{
            $data = 'NONE';
        }
    }
    else if( $prof_data['username'] == $hash_user && $prof_data['password'] == $hash_password){
        $data = array('username' => 'Professor');
    }
    else if( $adm_data['username'] == $hash_user && $adm_data['password'] == $hash_password){
        $data = array('username' => 'Administrador');
    }
    else{
        $data = 'NONE';
    }

    echo json_encode($data);
}
?>
