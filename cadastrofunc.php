<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" rel="stylesheet" href="styles/nsd/materialize.css">
      <link rel="stylesheet" type="text/css" href="styles/nsd/style.css">
      <link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="icons/fonts/material-icons.css">
      <link rel="stylesheet" type="text/css" href="styles/nsd/flag-icon.css">
      <style type="text/css">
      	.formulario{
            border: 3px solid #00bcd4;
            border-radius: 10px;
 }

                   .input-field .prefix.active {
                      color: #26a69a !important;
                    }


      </style>
      <meta charset='utf-8'/>
	<title>Cadastro</title>
</head>
<body>

    <?php
        if(!isset($_COOKIE['username'])){
            header('location: index.php');
        }
    ?>

<script type="text/javascript" src="scripts/form_validator.js">
</script>
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
                  <a href="#!" class="brand-logo darken-1">
                    <img src="" alt="">
                    <span class="logo-text hide-on-med-and-down">Asclépio</span>
                  </a>
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Instituto Médio Privado de Saúde Asclépio" style="border-radius: 25px;" />
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
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
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
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">Administrador<i class="mdi-navigation-arrow-drop-down right"></i></a>
                  <p class="user-roal">Administrator</p>
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="Admin.php" class="waves-effect waves-cyan">
                      <i class="material-icons">pie_chart_outlined</i>
                      <span class="nav-text"style="font-size: 17px">painel de controle</span>
                    </a>
                </li>
                 <li class="bold">
                  <a href="cadastrofunc.php" class="waves-effect waves-cyan">
                    <i class="fas fa-user-plus prefix  purple-text"></i>
                      <span class="nav-text" style="font-size: 17px">Cadastrar coordenador</span>
                    </a>
                </li>
                <li class="bold">

                    <style type="text/css">
                        .inline_list{
                            white-space: nowrap;
                            overflow-x: hidden;
                        }

                        .inline_list > li{
                            display: inline-block;
                        }

                    </style>

                    <ul class="inline_list">
                        <li>
                            <a href="#" class="waves-effect waves-cyan">
                            <i class="fas fa-user prefix purple-text"></i>
                            <span class="nav-text" style="font-size: 17px">Conta Pública</span>
                            </a>
                        </li>

                        <li>
                            <script type="text/javascript" src="scripts/guest_manager.js"></script>

                            <div class="switch" style="width: auto; float: right;">
                                <label>
                                  <!--Off-->
                                  <input type="checkbox" id="switch" onchange="putStatus();getStatus()">
                                  <span class="lever"></span>
                                  <!--On-->
                                </label>
                            </div>
                            <script type="text/jscript">
                                getStatus();
                            </script>
                        </li>
                    </ul>

                </li>

              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse  waves-effect waves-light hide-on-large-only">
           <i class="fas fa-bars fa-2x white-text"></i>
          </a>
        </aside>


         <section id="content">
          <!--start container-->
          <div class="container">
                  <div class="row">
  <p>&nbsp;</p>
  <form    action=""   method="" class="col s12" id='form'>
  <fieldset class="formulario" style="padding: 15px;">
    <legend><img src="pictures/func.jpg" class="circle" width="100"></legend>
    <h5 class="light center">Cadastro de Funcionário</h5>

                       <div class="input-field col s6">
                <i class="fas fa-id-badge prefix"></i>
                <input type="text" name="bi" id="bi" maxlength="14" required autofocus>
                <label for="bi">BI</label>
              </div>
              <div class="input-field col s6">
                 <i class="fas fa-user prefix"></i>
                <input type="text" name="nome_completo" id="nome_completo" maxlength="50">
                <label for="nome_completo">Nome Completo</label>
              </div>
                            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" maxlength="40" required>
                <label for="email">Email</label>
              </div>

                            <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="telefone" type="tel" class="validate">
                            <label for="icon_telephone">Telefone</label>
                            </div>

               <div class="input-field col s6">
                            <i class="fas fa-address-card prefix"></i>
                             <input id="morada" type="text" name="morada">
                             <label for="morada">Morada</label>
                             </div>

                             <div class="input-field col s6">
                            <i class="fas fa-calendar-day prefix"></i>
                             <input id="data_nascimento"  type="date">
                             <label for="data_nascimento"></label>
                             </div>

                          <div class="input-field col s6">
                <i class="fas fa-key prefix"></i>
                <input type="password" name="senha1" id="senha1" maxlength="14" required>
                <label for="senha">Senha</label>
              </div>
              <div class="input-field col s6">
                <i class="fas fa-key prefix"></i>
                <input type="password" name="senha2" id="senha2" maxlength="14" required>
                <label for="senha">Confirmar a Senha</label>
              </div>

                               <div class="input-field col s6">
                                <i class="fas fa-venus-mars prefix"></i>
                                 <select id='sexo'>
                                 <option value="" disabled selected required>Selecione o gênero</option>
                                <option value="M">Masculino</option>
                               <option value="F">Feminino</option>
                                </select>
                               </div>

                               <div class="input-field col s12">
                <input type="button" value="Cadastrar" class="btn blue" style=" margin:0 1em 0 0;" onclick='validator.submitInsert("coord","form");'>
                <input type="reset" value="Limpar" class="btn red"  class="fas fa-user">

              </div>


   </fieldset>
  </form>
</div>
               </div>
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
