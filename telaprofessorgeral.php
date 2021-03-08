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

<header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
     <a href="#" class="brand-logo">ASCLÉPIO</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a href="telalun.html" style="font-size: 18px;"><i class="material-icons left">home</i>Inicial</a></li>

       <li><a href="#" style="font-size: 18px;"><i class="material-icons left">keyboard_tab</i>Logout</a></li>

      </ul>
      </div>
  </nav>
</div>
  </header>
  <!--menu mobile-->
  <ul class="side-nav cyan"  id="mobile-demo">

     <li><a href="telalun.html" style="font-size: 18px;" class="white-text"><i class="material-icons left white-text">home</i>Inicial</a></li>
               <li> <a href="#" style="font-size: 18px;"  class="white-text">
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
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i>Logout</a>
              </li>
            </ul>
<div class="nav-wrapper">
  <section class="section row container">
    <h3><u>Boletins</u></h3>

    <?php
        require_once("data_manager.php");
        $boletim= new BoletimManager('documents/pauta.xlsx');
        $boletim->toTable();
    ?>
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
