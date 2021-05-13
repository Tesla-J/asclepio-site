<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fonts/material-icons.css">
	<link rel="stylesheet" type="text/css" href="styles/css/main.css">

	<title></title>
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
     <a href="#" class="brand-logo">ASCLÉPIO</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a href=<?php echo $_COOKIE['home'];?> style="font-size: 18px;"><i class="material-icons left">home</i>Inicial</a></li>
        <li><a href="vercomunicado.html" style="font-size: 18px;"><i class="far fa-comment-alt left"></i>Comunicados</a></li>
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

  <!--opções do user para computador-->
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

<div class="row container">
	<u><h4>Comunicados</h4></u>

    <?php
        require_once('data_manager.php');
        $com = new Comunicado();
        $comunicados = $com->getAllFromComunidado();

        foreach($comunicados as $c){
            echo "<span><h5>" . $c['Titulo'] . "</h5></span>";
            echo "<p class='justificado'>" . $c['Mensagem'] . "</p><hr/>";
        }
    ?>

</div>
<br>
<br>
<br>
<br>

 <footer class="page-footer cyan">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Unidade</h5>
                <ul>
                        <li ><a class="white-text"><i class="fas fa-map-marker-alt prefix"></i> 21 de Janeiro(frente à Chana)</a></li>
                        <li><a class="white-text"><i class="fas fa-phone-alt prefix"></i> (+244) 923456788</a></li>
                        <li><a class="white-text"><i class="fas fa-envelope prefix"></i> asclepio@gmail.com</a></li>
                    </ul>
                <p class="grey-text text-lighten-4">INSTITUTO MÉDIO PRIVADO DE SAÚDE ASCLÉPIO.</p>
              </div>



              <p class="social-text">Siga as nossas redes sociais</p>
              <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>

        </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> Todos os direitos reservados.
            <a class="grey-text text-lighten-4 right" href="#Inicio"><i class=" fas fa-caret-up fa-2x"></i></a>

            </div>
          </div>

      </footer>
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
