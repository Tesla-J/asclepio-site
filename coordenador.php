<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="styles/nsd/materialize.css">
      <link rel="stylesheet" type="text/css" href="styles/nsd/style.css">
      <link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="icons/fonts/material-icons.css">
      <link rel="stylesheet" type="text/css" href="styles/nsd/flag-icon.css">
      <style type="text/css">


      </style>
	<title>Coordenador</title>
    <meta charset='utf-8'/>
</head>
<body>

    <?php
        if(!isset($_SESSION['permission']))
            header('location: index');
        else if($_SESSION["permission"] != "Coordenador")
            header('location: ' . $_SESSION["home"]);
    ?>

   <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

 <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="coordenador" class="brand-logo darken-1">
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
                  <a id='username' class=" btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">
                      <?php
                        echo $_SESSION["username"];
                      ?>
                      <i class="mdi-navigation-arrow-drop-down right"></i>
                  </a>
                  <p class="user-roal">Coordenador</p>
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="coordenador" class="waves-effect waves-cyan">
                      <i class="material-icons">pie_chart_outlined</i>
                      <span class="nav-text" style="font-size: 17px;">Painel de Controle</span>
                    </a>
                </li>
                 <li class="bold">
                  <a href="cadastroalun" class="waves-effect waves-cyan">
                     <i class="fas fa-user-plus prefix green-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Cadastrar Alunos</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="cadastroenc" class="waves-effect waves-cyan">
                     <i class="fas fa-user-plus prefix orange-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Cadastrar Encarregados</span>
                    </a>
                </li>

                 <li class="bold">
                  <a href="enviarnotas" class="waves-effect waves-cyan">
                      <i class="fas fa-upload prefix cyan-text"></i>
                      <span class="nav-text" style="font-size: 17px;">Enviar Notas</span>
                    </a>
                </li>


                <li class="bold">
                  <a href="enviarcomunic" class="waves-effect waves-cyan">
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
             <?php
                require_once('data_manager.php');
                $counter = new Server();
             ?>
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
              <div class="row mt-1">
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="fa fa-suitcase fa-2x  background-round mt-5"></i>
                        <p>Cursos</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h4 class="mb-0"><?php $counter->singleRowQuery('select count(distinct Curso) from Aluno;'); ?></h4>
                       </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card green gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="fas fa-user fa-2x background-round mt-5"></i>
                        <p>Alunos</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h4 class="mb-0"><?php $counter->singleRowQuery('select count(Nome_Completo) from Aluno;'); ?></h4>
                      </div>

                    </div>
                    <a href="" class="btn green hoverable" style="width: 100%;">Abrir</a>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card orange gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="fas fa-user-tie fa-2x background-round mt-5"></i>
                        <p>Encarregados</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h4 class="mb-0"><?php $counter->singleRowQuery('select count(Nome_Completo) from Encarregado;'); ?></h4>
                      </div>
                    </div>
                    <a href="" class="btn orange hoverable" style="width: 100%;">Abrir</a>
                  </div>
                </div>




                  <div class="col s12 m6 l3">
                  <div class="card pink gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="fas fa-chalkboard-teacher fa-2x background-round mt-5"></i>
                        <p>Turmas</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h4 class="mb-0"><?php $counter->singleRowQuery('select count(distinct Turma) from Aluno;'); ?></h4>

                      </div>
                </div>

                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-purple-deep-orange gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="fas fa-home fa-2x background-round mt-5"></i>
                        <p>Salas</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h4 class="mb-0"><?php $counter->singleRowQuery('select count(distinct Turma) from Aluno;'); ?></h4>
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
<script type="text/javascript" src="scripts/js1/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="scripts/js1/materialize.min.js"></script>
<script type="text/javascript" src="scripts/js1/plugins.min.js"></script>

</body>
</html>
