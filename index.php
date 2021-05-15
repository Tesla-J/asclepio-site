<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
	    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
	    <link rel="stylesheet" type="text/css" href="fonts/material-icons.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

	    <title></title>

</head>
<body id="Inicio" class="scrollspy">
    <?php
        if(isset($_COOKIE['home'])){
            $home = $_COOKIE['home'];
            echo "<script type='text/javascript'>";
            echo "let home=\"$home\";";
            echo "</script>";
        }
    ?>
  <!--menu horizontal para telas maiores-->
  <header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper con">
     <a href="#" onclick='document.location.reload();' class="brand-logo">ASCLÉPIO</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fas fa-bars"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <?php
            if(isset($_COOKIE['username'])){
                echo "<li><a onclick='window.location.href=home;' href='#' id='#Inicio' style='font-size: 18px;'><i class='material-icons left'>home</i>Menu do Utilizador</a></li>";
            }
        ?>
         <li class="active"><a href="index.php" id="#Inicio"  style="font-size: 18px;"><i class="material-icons left">home</i>Inicial</a></li>
        <li><a href="informaçao.php" style="font-size: 18px;"><i class="material-icons left">info</i>Informações</a></li>

        <?php
            if(!isset($_COOKIE['username'])){
                echo '<li><a href="login.php" class="botão cyan" style="color: white; border-radius: 26px; border: 2px solid #fff; text-align: center; font-size: 18px;">Iniciar Sessão</a></li>';
                echo '<li><a href="arearestrita.php" class="botão cyan" style="color: white; border-radius: 26px; border: 2px solid #fff; text-align: center; font-size: 18px;">Área Restrita</a></li>';
            }
            else{
                echo '<li><a href="logout.php" class="botão cyan" style="color: white; border-radius: 26px; border: 2px solid #fff; text-align: center; font-size: 18px;">Sair</a></li>';
            }
        ?>

      </ul>
      </div>
  </nav>
</div>
  </header>
      <!--menu para telefone-->
      <ul class="side-nav cyan" style=" padding: 5px; font-size: 18px;" id="mobile-demo">
         <h4>ASCLÉPIO</h4>
        <div class="divider"></div>
       <?php
            if(isset($_COOKIE['username'])){
                echo "<li><a onclick='window.location.href=home;' href='#' class='white-text' style=' font-size: 18px;'><i class='material-icons left white-text'>home</i> Menu do Utilizador </a></li>";
            }
       ?>

      <li><a href="informaçao.php" class="white-text" style=" font-size: 18px;"><i class="material-icons left white-text">info</i>Informações</a></li><br>


        <?php
            if(!isset($_COOKIE['username'])){
                echo '<li><a href="login.php" class="botão cyan" style="color: white; border-radius: 26px; border: 2px solid #fff; text-align: center; font-size: 18px;">Iniciar Sessão</a></li>';
                echo '<li><a href="arearestrita.php" class="botão cyan" style="color: white; border-radius: 26px; border: 2px solid #fff; text-align: center; font-size: 18px;">Área Restrita</a></li>';
            }
            else{
                echo '<li><a href="logout.php" class="botão cyan" style="color: white; border-radius: 26px; border: 2px solid #fff; text-align: center; font-size: 18px;">Sair</a></li>';
            }
        ?>

      </ul>


  <!--slider-->
  <main>
    <section class="slider">
     <ul class="slides">
      <li>
        <img src="pictures/81486978_119769672865502_325532326031261696_o.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption left-align">
          <h2>ITMPSA</h2>
          <h3 class=" cyan-text"style="font-size:40px ! important;">Instituto Técnico Médio Privado de Saúde Asclépio</h3>
        </div>
      </li>
      <li>
        <img src="pictures/2.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption center-align">
          <h2>ITMPSA</h2>
          <h4 class=" cyan-text" style="font-size:40px ! important;">Ensino & Inovação</h3>
        </div>
      </li>
      <li>
        <img src="pictures/82535738_119769862865483_2126928505751994368_o.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h2>ITMPSA</h2>
          <h5 class=" grey-text text-lighten-3" style="font-size:40px ! important;">Saúde & Aprendizagem</h5>
        </div>
      </li>
    </ul>
  </section>
</main>
<!--segundo conteúdo-->
<main>
  <section class="service-block">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m3">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <a><i class="fa fa-university" style="font-size: 70px;"></i></a>
                                    <!--<img alt="image" class="img-responsive" src="images/icons/wifi.png">-->
                                </div>
                                <h4><a href="IMPSA.html" class="">ITMPSA</a></h4>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <a><i class="fa fa-eye" style="font-size: 70px;"></i></a>
                                </div>
                                <h4><a href="visao.html">Visão</a></h4>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <a><i class="fa fa-book" style="font-size: 70px;"></i></a>
                                </div>
                                <h4><a href="ensino.html">Ensino</a></h4>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="service-details text-center">
                                <div class="service-image">
                                   <a><i class="fa fa-suitcase" style="font-size: 70px;"></i></a>
                                </div>
                                <h4><a href="cursos.html">Cursos</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

</main>
<!--terceiro conteúdo cartões-->
<section class="section">

   <div class="row container">
        <div class="col s12 m3">
          <div class="card small">
            <div class="card-content">
              <span class="card-title cyan-text justificado">ITMPSA</span>
              <p>Se alguém procura a saúde, pergunta-lhe primeiro se está disposto a evitar no futuro as causas da doença; em caso contrário, abstém-te de o ajudar.
               Sócrates</p>

            </div>

          </div>
        </div>

        <div class="col s12 m3">
          <div class="card small">
            <div class="card-content">
              <span class="card-title cyan-text justificado">ITMPSA</span>
              <p>Ao médico, o dom da cura
              Ao dentista, o sorriso
              Ao palhaço, as crianças
              Ao amigo, bons conselhos
              Ao poeta, palavras de amor.
              João Vitor Rocha
             </p>
            </div>

          </div>
        </div>

        <div class="col s12 m3">
          <div class="card small">
            <div class="card-content">
              <span class="card-title cyan-text justificado">ITMPSA</span>
              <p>Na farmácia da vida, o melhor remédio para consumo diário ainda é o amor.
              E dele só abro mão quando inventarem outro tão bom quanto este. Pedro Sebastian</p>
            </div>

          </div>
        </div>

        <div class="col s12 m3">
          <div class="card small">
            <div class="card-content ">
              <span class="card-title cyan-text justificado">ITMPSA</span>
              <p>Todo mundo é um cientista maluco e a vida é o Laboratório. A gente está sempre experimentando, tentando achar um jeito de viver, de resolver os problemas, de se livrar da loucura do caos.
              David Cronenberg
            </p>
            </div>

          </div>
        </div>
      </div>
</section>

<section class="vacation-offer-block">
                <div class="vacation-offer-bgbanner responsive-img" >
                    <div class="">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="vacation-offer-details">
                                    <h1>Aguardamos por ti!</h1>
                                    <h4 class="light">Conheça a nossa instituição , Cursos e nossos interesses.</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




<!--rodapé-->

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


$('.slider').slider({
      indicators: true,
      height: 400,
      transition: 500,
      interval:6000,

     });


 });
</script>
</body>
</html>
