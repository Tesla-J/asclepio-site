<!DOCTYPE html>
<html lang="PT">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/css/style.css" />
    <title>Formulário de login e cadastro</title>
  </head>
  <body>

      <?php
          if(isset($_COOKIE['username'])){
              header('location: index.php');
          }
          else if (isset($_COOKIE['block'])) header("location: index.php");
      ?>

      <script type="text/javascript" src="scripts/client_login.js"></script>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" id='username'/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id='password'/>
            </div>
            <input type="button" value="Login" class="btn solid"
            onclick="login.login('username', 'password');"/>
            <p class="social-text"><a href="index.php" style="color: black;">Voltar</a></p>
            <p class="social-text" style="text-align: center;">Não tem nenhuma conta dirija-se à instituição.</p>
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

      <div class="panels-container">
        <div class="panel left-panel">

          <img src="pictures/undraw_book_lover_mkck.svg" class="image" alt="" />
        </div>
      </div>


    <script src="apple.js"></script>
  </body>
</html>
