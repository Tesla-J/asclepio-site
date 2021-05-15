<!DOCTYPE html>
<?php
include_once ("conexao.php");
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-icons.css">
	<style type="text/css">
  .row .col.s9 {
  width: 87%;
  margin-left: auto;
  left: auto;
  right: auto;
}
</style>
	<title></title>
</head>
<body>

    <?php
        if(!isset($_COOKIE['username'])){
            header('location: index.php');
        }
    ?>

<header>
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
     <a href="alunoconsulta.php" class="brand-logo">Banco de Dados</a>
      </div>
</nav>
</div>
  </header>
 <p>&nbsp;</p>
  <div class="row container">
  <div class="col s12">
    <h5 class="light">Consulta</h5><hr>
      <p>&nbsp;</p>

    <form method="post" action="">
             <input type="text" name="Filtro" class="campo col s8" placeholder="Pesquisar">
        <input type="submit" value="Pesquisar" class="btn cyan">
      </form>
      </div>
    </div>
      <p>&nbsp;</p>


       <script type="text/javascript">
   window.onload=function() {
   Materialize.toast('<?php
                          if(isset($_SESSION['mensagem'])):
                            echo $_SESSION['mensagem'];
                            session_unset();
                          endif;
            ?>', 2000, 'cyan');
   };
 </script>




	<section class="section row container">


		<table class="striped bordered centered responsive-table">
        <thead>
        <tr>

          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
           <th>Sexo</th>
            <th>Turma</th>
            <th>Morada</th>
            <th>Curso</th>
            <th>Data de Nascimento</th>
            <th>Encarregado</th>
        </tr>
        </thead>

         <tbody>
            <?php include_once'readalun.php' ?>
               </tbody>
        </tbody>
      </table>
	</section>


<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">
	$(document).ready(function () {

	});


	</script>
</body>
</html>
