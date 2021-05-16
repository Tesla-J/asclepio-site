<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">

    .notification-badge {
  font-family: "Roboto", sans-serif;
  position: relative;
  right: 5px;
  top: -20px;
  color: #ffffff;
  background-color: #00bcd4;
  margin: 0 -.8em;
  border-radius: 50%;
  padding: 2px 5px;
}

</style>
	<title>Página inicial</title>
    <meta charset="utf-8"/>
</head>
<body>
    <?php
        if(!isset($_SESSION['permission']))
            header('location: index');
        else if($_SESSION["permission"] != "Aluno")
            header("location: " . $_SESSION["home"]);
    ?>

<header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
     <a href="index" class="brand-logo">ASCLÉPIO</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a href="index" style="font-size: 18px;"><i class="material-icons left">home</i>Início</a></li>
        <li><a href="vercomunicado" style="font-size: 18px;"><i class="far fa-comment-alt left"></i><small class="notification-badge red accent-2">5</small>Comunicados</a></li>
         <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="default-user.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
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
      <a href="#!name"><span class="white-text name" id='username'><?php echo $_SESSION["username"]?></span></a>
      <a href="#!email"><span class="white-text email" id='user_mail'><?php echo $_SESSION["email"]?></span></a>
    </div></li>
      <li><a href="index" style="font-size: 18px;" class="white-text"><i class="material-icons left white-text">home</i>Início</a></li>
        <li><a href="vercomunicado" style="font-size: 18px;"  class="white-text"><i class="far fa-comment-alt left white-text"></i>Comunicados</a></li>
        <li class="divider"></li>
         <li>
                <a href="#" onclick="document.location.replace('logout')" style="font-size: 18px;"  class="white-text">
                  <i class="material-icons white-text">keyboard_tab</i>Sair</a>
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
                <a href="#" onclick="document.location.replace('logout')" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i>Sair</a>
              </li>
            </ul>
<div class="nav-wrapper">
	<section class="section row container">
		<h3><u>Meu Aproveitamento</u></h3>

        <?php
            echo "<div id='notas'>";

            require_once('data_manager.php');
            $boletim_db = new Boletim();
            $boletim_list = $boletim_db->getAllFromBoletim();
            $boletim_data = null;

            foreach($boletim_list as $reg_num => $reg){
                foreach($reg as $key => $value){
                    if(!strcmp($key, 'Arquivo')){
                        $boletim_mg = new BoletimManager($value);
                        $boletim_data = $boletim_mg->get($_SESSION['username']);

                        if($boletim_data != null){
                            foreach($boletim_data as $key => $value){
                                echo "$key: $value <br/>";
                            }
                        }
                    }
                }
            }
            echo "</div>";

        ?>

        <script type='text/javascript'>
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
