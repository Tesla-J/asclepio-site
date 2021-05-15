<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/material-icons.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
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

    <?php
        if(!isset($_COOKIE['username'])){
            header('location: index.php');
        }
    ?>

<header >
    <div class=" navbar-fixed">
    <nav class="cyan">
    <div class="nav-wrapper container">
     <a href="alunoconsulta.php" class="brand-logo">ASCLÉPIO</a>
      </div>
  </nav>
</div>
  </header>

<?php

include_once 'conexao.php';
$BI = $_GET['BI'];
$_SESSION['BI']= $BI;

$querySelect=$conexao->query("select * from aluno where BI='$BI'");
while ($registros=$querySelect->fetch_assoc()):

$BI=$registros['BI'];
$Nome_Completo=$registros['Nome_Completo'];
$Email=$registros['Email'];
$Telefone=$registros['Telefone'];
$Sexo=$registros['Sexo'];
$Turma=$registros['Turma'];
$Morada=$registros['Morada'];
$Curso=$registros['Curso'];
$Data_Nascimento=$registros['Data_Nascimento'];
endwhile;
?>

           <div class="row container">
  <p>&nbsp;</p>
  <form    action="updatealun.php"   method="POST" class="col s12">
  <fieldset class="formulario" style="padding: 15px;">
    <legend><img src="pictures/2919600.png" width="100"></legend>
    <h5 class="light center">Actualizar Aluno</h5>

                              <div class="input-field col s6">
                <i class="fas fa-id-badge prefix"></i>
                <input   type="text" name="BI" id="BI" maxlength="14" value="<?php echo $BI?>">
                <label for="BI">BI</label>
              </div>

                       <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="Nome_Completo" id="Nome_Completo" maxlength="70" value="<?php echo $Nome_Completo ?>" required autofocus>
                <label for="Nome_Completo">Nome Completo</label>
              </div>
              <!--<div class="input-field col s6">
                 <i class="fas fa-user prefix"></i>
                <input type="text" name="BI_Encarregado" id="BI_Encarregado" maxlength="50" required >
                <label for="BI_Encarregado">BI Encarregado</label>
              </div>-->
                            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" id="Email" maxlength="40"  value="<?php echo $Email ?>" required>
                <label for="Email">Email</label>
              </div>


                             <div class="input-field col s6">
                            <i class="fas fa-chalkboard-teacher prefix"></i>
                             <input id="Turma" type="text" name="Turma" value="<?php echo $Turma ?>" maxlength="35">
                             <label for="Turma">Turma</label>
                             </div>


                            <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="Telefone" name=Telefone type="tel" class="validate" value="<?php echo $Telefone ?> ">
                            <label for="Telefone">Telefone</label>
                            </div>

                            <div class="input-field col s6">
                            <i class="fas fa-address-card prefix"></i>
                             <input id="Morada" type="text" name="Morada" value="<?php echo $Morada ?> ">
                             <label for="Morada">Morada</label>
                             </div>

                             <div class="input-field col s6">
                            <i class="fas fa-calendar-day prefix"></i>
                             <input  type="date" id="Data_Nascimento"  name="Data_Nascimento" value="<?php echo $Data_Nascimento ?>">
                             <label for="Data de Nascimento"></label>
                             </div>

                             <div class="input-field col s6">
                              <i class="fa fa-suitcase prefix"></i>
                          <select name="Curso" value="<?php echo $Curso ?>">
                          <option value=" " disabled selected>Selecionar curso</option>
                          <option value="1">Análises Clínicas</option>
                          <option value="2">Enfermagem</option>
                          <option value="3">Estomatologia</option>
                          <option value="4">Farmácia</option>
                          </select>
                          </div>



                               <div class="input-field col s6">
                                <i class="fas fa-venus-mars prefix"></i>
                                 <select name="Sexo" id="Sexo" value="<?php echo $Sexo ?>">
                                 <option value="" disabled selected>Selecione o gênero</option>
                                <option value="1">Masculino</option>
                               <option value="2">Feminino</option>
                                </select>
                               </div>


                               <div class="input-field col s12">
                <input type="submit" class="btn blue" value="Actualizar"  style=" margin:0 1em 0 0;">

                <a href="alunoconsulta.php" class="btn red">Cancelar</a>

              </div>


   </fieldset>
  </form>
</div>
 </div>
 <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
      $('select').material_select();
  });
  </script>
</body>
</html>
