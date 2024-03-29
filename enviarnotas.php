<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="nsd/materialize.css">
      <link rel="stylesheet" type="text/css" href="nsd/style.css">
      <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/material-icons.css">
      <link rel="stylesheet" type="text/css" href="nsd/flag-icon.css">
      <style type="text/css">


      </style>
	<title></title>
</head>
<body>

    <?php
        if(!isset($_COOKIE['username'])){
            header('location: index.php');
        }
    ?>

<script type="text/javascript" src="scripts/cookie_manager.js"></script>
 <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="coordenador.php" class="brand-logo darken-1">
                    <img src="" alt="">
                    <span class="logo-text hide-on-med-and-down">Asclépio</span>
                  </a>
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Instituto Médio Privado de Saúde Asclépio " style="border-radius: 25px;" />
            </div>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-ao"></span>
                </a>
              </li>

              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge pink accent-2">5</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="default-user.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>

            </ul>
            <!-- translation-button -->
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-ao"></i>Angola</a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICATIONS
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown -->
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
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>

    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                  <img src="default-user.png" alt="" class="circle responsive-img valign profile-image cyan">
                </div>
                <div class="col col s8 m8 l8">
                  <ul id="profile-dropdown-nav" class="dropdown-content">
                    <li>
                      <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">face</i>Perfil</a>
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
                  <a class=" btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"><i id='username' class="mdi-navigation-arrow-drop-down right"></i></a>
                  <p class="user-roal">coordenador</p>
                  <script>
                  	let e = document.getElementById('username');
                  	e.innerHTML=cookieManager.getUsername();
                  </script>
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="coordenador.php" class="waves-effect waves-cyan">
                      <i class="material-icons">pie_chart_outlined</i>
                      <span class="nav-text" style="font-size: 17px;">Painel de Controle</span>
                    </a>
                </li>
                 <li class="bold">
                  <a href="cadastroalun.php" class="waves-effect waves-cyan">
                     <i class="fas fa-user-plus prefix green-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Cadastrar Alunos</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="cadastroenc.php" class="waves-effect waves-cyan">
                     <i class="fas fa-user-plus prefix orange-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Cadastrar Encarregados</span>
                    </a>
                </li>

                 <li class="bold">
                  <a href="enviarnotas.php" class="waves-effect waves-cyan">
                      <i class="fas fa-upload prefix cyan-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Enviar Notas</span>
                    </a>
                </li>

                <li class="bold">
                  <a href="enviarnotas.php" class="waves-effect waves-cyan">
                      <i class="fas fa-upload prefix cyan-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Enviar Comunicados</span>
                    </a>
                </li>


              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse waves-light hide-on-large-only">
           <i class="fas fa-bars fa-2x white-text"></i>
          </a>
        </aside>

         <section id="content">
          <!--start container-->
          <div class="container">
            <p>&nbsp;</p>
<div class="row">
    <div class="col s12 ">
      <div class="card">


        <div class="card-action cyan white-text">
          <h3 class="light"><u style="border-radius: 35px;">Arquivos</u></h3>

        </div>

        <form class="" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="card-content">
              <div class="file-field input-field">
                        <div class="btn cyan">
                        <span>Arquivo</span>
                       <input type="file" name='boletim' multiple>
                       </div>
                    <div class="file-path-wrapper">
                     <input class="file-path validate" type="text" placeholder="Faça upload de um ou mais arquivos">
                     </div>
                     </div>

              <div class="input-field col s12">
                     <i class="fas fa-user prefix cyan-text"></i>
                    <input type="text" name="bi_coordenador" id="bi_coordenador" maxlength="14" value=<?php echo $_COOKIE['bi']?> disabled>
                    <label for="nomecompleto">Autor</label>
                  </div>

              <div class="form-field">
                <button class="btn-large waves-effect cyan" style="width:100%;">Enviar</button>
              </div><br>

               </div>
        </form>

     </div>
    </div>

      </div>

            </div>
                 <br>
                  <br>
                   <br>
                    <br>
                     <br>
                      <br>
                       <br>
                        <br>


         <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="#!">AEJMRS</a><span> Todos os direitos reservados.</span>
            <span class="right hide-on-small-only"> Design e desenvolvido por <a class="grey-text text-lighten-2" href="">AEJMRS</a></span>
          </div>
        </div>
    </footer>
<script type="text/javascript" src="js1/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js1/materialize.min.js"></script>
<script type="text/javascript" src="js1/plugins.min.js"></script>

</body>
</html>
