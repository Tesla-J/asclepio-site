<?php session_start(); ?>
<!DOCTYPE html>
<html lang="PT">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/css/style.css" />
    <title>Login</title>
  </head>
  <body>

      <?php
          if(isset($_SESSION['permission']) || isset($_COOKIE['ACCESSIBILITY']))
              header('location: index');
      ?>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="E-mail" id='email' onblur="validateEmail()" maxlength="30" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" id='password' onblur="validatePassword()" maxlength="128" minlength="8" required/>
            </div>
            <p id="errorTag" style="color: red;"></p>
            <input type="button" value="Login" class="btn solid"
            onclick="submitData();"/>
            <script type="text/javascript" src="scripts/client_login.js"></script>
            <p class="social-text"><a href="index" style="color: black;">Voltar</a></p>
            <p class="social-text" style="text-align: center;">Não possui uma conta? Dirija-se à Secretaria.</p>
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
