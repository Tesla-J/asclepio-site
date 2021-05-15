<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>Página inicial</title>
    <meta charset="utf-8">
</head>
<body>

    <?php
        if(!isset($_COOKIE['username'])){
            header('location: index.php');
        }
    ?>

<header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="fas fa-bars"></i></a>
     <a href="#" class="brand-logo">ASCLÉPIO</a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a href="index.php" style="font-size: 18px;"><i class="material-icons left">home</i>Página Inicial</a></li>
        <li><a href="vercomunicado.php" style="font-size: 18px;"><i class="far fa-comment-alt left"></i>Comunicados</a></li>

      </ul>
      </div>
  </nav>
</div>
  </header>
  <!--menu mobile-->
  <ul class="side-nav cyan"  id="mobile-demo">
        <li><div class="user-view">
      <div class="background">
        <img src="office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="default-user.png"></a>
      <a href="#!name"><span class="white-text name"><?php echo $_COOKIE['username'];?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $_COOKIE['email'];?></span></a>
    </div></li>
      <li><a href="index.php" style="font-size: 18px;" class="white-text"><i class="material-icons left white-text">home</i>Página inicial</a></li>
        <li><a href="vercomunicado.php" style="font-size: 18px;"  class="white-text"><i class="far fa-comment-alt left white-text"></i>Comunicados</a></li>
        <li class="divider"></li>
         <li>
                <a href="logout.php" style="font-size: 18px;"  class="white-text">
                  <i class="material-icons white-text">keyboard_tab</i>Terminar sessão</a>
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
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i>Logout</a>
              </li>
            </ul>
<div class="nav-wrapper">
	<section class="section row container">
		<h3><u> Aproveitamento do Meu Educando</u></h3>

		<?php
            echo "<div id='notas'>";
            require_once('data_manager.php');

            $aluno_db = new Aluno();
            $aluno_db->setTable('Aluno');
            $aluno_list = $aluno_db->get_r('BI_Encarregado', $_COOKIE['bi']);
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
        <script type="text/javascript">
            let notas = document.getElementById('notas');
            if(notas.innerHTML == 0){
                notas.innerHTML = "<p>Ainda não existem dados a serem exibidos.</p>";
            }
        </script>
	</section>
</div>

<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

    $('.button-collapse').sideNav();
});
</script>
</body>
</html>
