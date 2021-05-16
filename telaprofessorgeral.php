<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="icons/fonts/material-icons.css">
  <link rel="stylesheet" type="text/css" href="styles/css/main.css">

  <title></title>
</head>
<body>

    <?php
        if(!isset($_SESSION['permission']))
            header('location: index');
        else if($_SESSION["permission"] != "Professor")
            header("location: " . $_SESSION["home"]);
    ?>

<header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
     <a id="teste" href="#" class="brand-logo">ASCLÉPIO</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a href="index" style="font-size: 18px;"><i class="material-icons left">home</i>Início</a></li>

       <li><a href="logout" style="font-size: 18px;"><i class="material-icons left">keyboard_tab</i>Sair</a></li>

      </ul>
      </div>
  </nav>
</div>
  </header>
  <!--menu mobile-->
  <ul class="side-nav cyan"  id="mobile-demo">

     <li><a href="index" style="font-size: 18px;" class="white-text"><i class="material-icons left white-text">home</i>Inicial</a></li>
               <li> <a href="logout" style="font-size: 18px;"  class="white-text">
                  <i class="material-icons white-text">keyboard_tab</i>Logout</a>
              </li>
      </ul>
<!-- opções do user para computador-->
     <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i>Definições</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i>Ajuda</a>
              </li>
              <li class="divider"></li>

              <li>
                <a href="logout" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i>Logout</a>
              </li>
            </ul>
<div class="nav-wrapper">
  <section class="section row container">
    <h3><u>Boletins</u></h3>

    <?php
        echo "<div id='notas'>";
        require_once('data_manager.php');

        $aluno_db = new Aluno();
        $aluno_db->setTable('Aluno');
        $aluno_list = $aluno_db->getAll_r();
        $aluno_names = array();

        //saving students names
        foreach($aluno_list as $reg_num => $reg){
            foreach($reg as $key => $value){
            //foreach($reg as $key => $value)
                if(!strcmp($key, 'Nome_Completo')){
                    array_push($aluno_names, $value);
                }
            }
        }

        if($aluno_names == null) echo "<p style='color: red'>Ainda não tem alunos cadastrados no sistema.</p>";
        else{
            $boletim_db = new Boletim();
            $boletim_list = $boletim_db->getAllFromBoletim();

            foreach($boletim_list as $reg_num => $reg){ //loop dos registros
                foreach($reg as $key => $value){ //loop dos dados de cada registro
                    if(!strcmp($key, 'Arquivo')){
                        $boletim_mg = new BoletimManager($value);
                        foreach($aluno_names as $name){ //loop dos nomes dos alunos
                            if($boletim_mg->get($name) != null){
                                foreach($boletim_mg->get($name) as $key => $value ) //dados de cada nome
                                    echo "$key: $value <br/>";
                                echo "<hr/>";
                            }else continue;
                        }
                    }
                }
            }
        }
        echo "</div>"
    ?>
    <script type='text/javascript'>
        let notas = document.getElementById('notas');
        if(notas.innerHTML == 0){
            alert('Não há oque mostrar no momento.');
            notas.innerHTML = "<p>Ainda não existem dados para serem exibidos.</p>";
        }
    </script>
  </section>
</div>

<script type="text/javascript" src="scripts/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="scripts/js/materialize.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

    $('.button-collapse').sideNav();
  });

   $('.notification-button, .profile-button, .dropdown-settings').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: true,
      gutter: 0,
      belowOrigin: true,
      alignment: 'right',
      stopPropagation: false
    });

  </script>
</body>
</html>
