<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="hc/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="hc/longfield.css">
	<title></title>
</head>
<body>

    <?php
        if(isset($_SESSION['permission']) || isset($_COOKIE['ACCESSIBILITY'])){
            header('location: index');
        }
    ?>


	<section class="form my-4 mx-1">
	<div class="container">
		<p>&nbsp;</p>
		<div class=" row content no-gutter">
			<div class="col-lg-5">
			<img src="undraw_quitting_time_dm8t.svg" class="img-fluid mt-5 " alt="image">
			</div>
			<div class="col-lg-7">
			<h3 class="signin-text mb-3 text-center">LOGIN ÁREA RESTRITA</h3>
			<form method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" name="email" id='email' class="form-control" onblur="validateEmail()" maxlength="30" required>
			</div>
			<div class="form-group">
				<label for="password">Senha</label>
				<input type="password" name="password" id='password' class="form-control" onblur="validatePassword()" minlength="8" maxlength="128" required>
                </div>
                <p style="color:red" id="errorTag"></>
                <div class="form-group col-lg-7">
                <input type='button' value='Login' class="btn btn-class mb-3" onclick="submitData()"/>
                </div>
                <p>Área reservada para Funcionários</p>
                <p>Acessou esta página por engano? Clique <a href="index">aqui</a> para voltar.</p>
                <script type="text/javascript" src='scripts/func_login.js'></script>
			</form>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="test/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="test/bootstrap.min.js"></script>
</body>
</html>
