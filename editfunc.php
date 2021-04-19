
<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fonts/material-icons.css">
	<link rel="stylesheet" type="text/css" href="styles/css/main.css">
	<style type="text/css">
      	.formulario{
            border: 3px solid #00bcd4;
            border-radius: 10px;
 }

                   .input-field .prefix.active {
                      color: #26a69a !important;
                    }

      </style>
	<title></title>
</head>
<body>

<header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
     <a href="funciconsulta.php" class="brand-logo">ASCLÉPIO</a>
      </div>
  </nav>
</div>
  </header>

<div class="container">
                  <div class="row">
  <p>&nbsp;</p>
  <form    action="updatefunc.php"   method="post" class="col s12">
  <fieldset class="formulario" style="padding: 15px;">
    <legend><img src="pictures/func.jpg" class="circle" width="100"></legend>
    <h5 class="light center">Actualizar Funcionário</h5>

             <?php
include_once 'conexao.php';
$BI_Coordenador = $_GET['BI_Coordenador'];
$_SESSION['BI_Coordenador']=$BI_Coordenador;

$querySelect=$conexao->query("select * from Coordenador where BI_Coordenador='$BI_Coordenador'");
while ($registros=$querySelect->fetch_assoc()):

$BI_Coordenador=$registros['BI_Coordenador'];
$Nome_Completo=$registros['Nome_Completo'];
$Email=$registros['Email'];
$Telefone=$registros['Telefone'];
$Sexo=$registros['Sexo'];
$Data_Nascimento=$registros['Data_Nascimento'];
$Morada=$registros['Morada'];

endwhile;
?>

           <div class="input-field col s6">
                <i class="fas fa-id-badge prefix"></i>
                <input type="text" name="BI_Coordenador" id="BI" value="<?php echo $BI_Coordenador ?>" >
                <label for="BI">BI</label>
              </div>
              <div class="input-field col s6">
                 <i class="fas fa-user prefix"></i>
                <input type="text" name="Nome_Completo" id="Nome_Completo" value="<?php echo $Nome_Completo ?>">
                <label for="nomecompleto">Nome Completo</label>
              </div>
                            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" id="Email"  value="<?php echo $Email ?>">
                <label for="email">Email</label>
              </div>

                            <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" name="Telefone" value="<?php echo $Telefone ?>" type="tel" class="validate">
                            <label for="icon_telephone">Telefone</label>
                            </div>

               <div class="input-field col s6">
                            <i class="fas fa-address-card prefix"></i>
                             <input id="Morada" type="text" name="Morada" value="<?php echo $Morada ?>">
                             <label for="Morada">Morada</label>
                             </div>

                             <div class="input-field col s6">
                            <i class="fas fa-calendar-day prefix"></i>
                             <input id="Data_nascimento"  type="date" name="Data_Nascimento" value="<?php echo $Data_Nascimento ?>">
                             <label for="Data de Nascimento"></label>
                             </div>



                               <div class="input-field col s6">
                                <i class="fas fa-venus-mars prefix"></i>
                                 <select id="Sexo" name="Sexo" value="<?php  $Sequiço ?>">
                                 <option value="" disabled selected>Selecione o gênero</option>
                                <option value="1">Masculino</option>
                               <option value="2" >Feminino</option>
                                </select>
                               </div>

                               <div class="input-field col s12">
                <input type="submit" value="Actualizar" class="btn blue" style=" margin:0 1em 0 0;">
               <a href="funciconsulta.php" class="btn red">Cancelar</a>
              </div>


   </fieldset>
  </form>
</div>
               </div>

 <script type="text/javascript" src="scripts/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="scripts/js/materialize.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
			$('select').material_select();
	});
	</script>
</body>
</html>
