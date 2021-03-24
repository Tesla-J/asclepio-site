<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('data_manager.php');

    $response = null;

    switch($_POST['type']){
        case 'GET':
            switch($_POST['entity']){
                case 'aluno':
                    $aluno = new Aluno();
                    $aluno->setTable('Aluno');
                    $response = $aluno->search('Nome_Completo', $_POST['nome']);
                    break;
                case 'coord':
                    $coordenador = new Coordenador();
                    $coordenador->setTable('Coordenador');
                    $response = $coordenador->search('Nome_Completo', $_POST['nome']);
                    break;
                case 'enc':
                    $encarregado = new Encarregado();
                    $encarregado->setTable('Encarregado');
                    $response = $encarregado->search('Nome_Completo', $_POST['nome']);
                    break;
            }
            break;

        case 'UPDATE':
            switch($_POST['entity']){
                case 'aluno':
                    $aluno = new Aluno();
                    $aluno->setTable('Aluno');
                    $aluno->update('BI', $_POST['bi'], 'Sexo', $_POST['sexo']);
                    $aluno->update('BI', $_POST['bi'], 'Curso', $_POST['curso']);
                    $aluno->update('BI', $_POST['bi'], 'Nome_Completo', $_POST['nome_completo']);
                    $aluno->update('BI', $_POST['bi'], 'Email', $_POST['email']);
                    $aluno->update('BI', $_POST['bi'], 'Data_Nascimento', $_POST['data_nascimento']);
                    $aluno->update('BI', $_POST['bi'], 'Telefone', $_POST['telefone']);
                    $aluno->update('BI', $_POST['bi'], 'Morada', $_POST['morada']);
                    $aluno->update('BI', $_POST['bi'], 'Turma', $_POST['turma']);
                    $aluno->update('BI', $_POST['bi'], 'Senha', hash("sha512", $_POST['senha'], false));
                    $aluno->update('BI', $_POST['bi'], 'Turma', $_POST['turma']);
                    $aluno->update('BI', $_POST['bi'], 'BI', $_POST['bi']);
                    $response = json_encode('OK');
                    break;
                case 'coord':
                    $coordenador = new Coordenador();
                    $coordenador->setTable('Coordenador');
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Senha', hash('sha512', $_POST['senha'], false));
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Email', $_POST['email']);
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Telefone', $_POST['telefone']);
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Data_Nascimento', $_POST['data_nascimento']);
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Sexo', $_POST['Sexo']);
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Morada', $_POST['morada']);
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'Nome_Completo', $_POST['nome_completo']);
                    $coordenador->update('BI_Coordenador', $_POST['bi_coordenador'], 'BI_Coordenador', $_POST['bi_coordenador']);
                    $response = json_encode('OK');
                    break;
                case 'enc':
                    $encarregado = new Encarregado();
                    $encarregado->setTable('Encarregado');
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'Sexo', $_POST['sexo']);
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'Telefone', $_POST['telefone']);
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'Email', $_POST['email']);
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'Morada', $_POST['morada']);
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'Nome_Completo', $_POST['nome_completo']);
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'Senha', hash('sha512', $_POST['senha'], false));
                    $encarregado->update('BI_Encarregado', $_POST['bi_encarregado'], 'BI_Encarregado', $_POST['bi_encarregado'] );
                    $response = json_encode('OK');
                    break;
            }
            break;

        case 'DELETE':
            switch($_POST['entity']){
                case 'aluno':
                    $aluno = new Aluno();
                    $aluno->setTable('Aluno');
                    $aluno->delete('BI', $_POST['bi']);
                    $response = json_encode('OK');
                    break;
                case 'coord':
                    $coordenador = new Coordenador();
                    $coordenador->setTable('Coordenador');
                    $coordenador->delete('BI_Coordenador', $_POST['bi_coordenador']);
                    $response = json_encode('OK');
                    break;
                case 'enc':
                    $encarregado = new Encarregado();
                    $encarregado->setTable('Encarregado');
                    $encarregado->delete('BI_Encarregado', $_POST['bi_encarregado']);
                    $response = json_encode('OK');
                    break;
            }
            break;

        default: $respnse = json_encode('NONE');
    }

    echo (string) $response;
}

?>
