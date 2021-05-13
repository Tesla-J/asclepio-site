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
        if(isset($_COOKIE['username'])){
            header('location: index.php');
        }
        else if (isset($_COOKIE['block'])) header("location: index.php");
    ?>

	<script type="text/javascript" src='scripts/func_login.js'></script>
    <script type="text/javascript">
        var login = new FuncLogin();
    </script>
	<section class="form my-4 mx-1">
	<div class="container">
		<p>&nbsp;</p>
		<div class=" row content no-gutter">
			<div class="col-lg-5">
			<img src="undraw_quitting_time_dm8t.svg" class="img-fluid mt-5 " alt="image">
			</div>
			<div class="col-lg-7">
			<h3 class="signin-text mb-3 text-center">LOGIN ÁREA RESTRITA</h3>
			<form id='form'>
			<div class="form-group">
				<label for="username">Utilizador</label>
				<input type="text" name="username" id='username' class="form-control">
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id='senha' class="form-control">
                </div>
                <div class="form-group col-lg-7">
                <input type='button' value='Login' class="btn btn-class mb-3" onclick="login.login('username', 'senha');"/>
                </div>
                <p>Área reservada para Funcionários</p>
                <p>Clique aqui para <a href="index.php">Voltar</a></p>
			</form>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="test/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="test/bootstrap.min.js"></script>
</body>
</html>