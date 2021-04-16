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
     <a href="encarregadoconsulta.php" class="brand-logo">ASCLÉPIO</a>
      </div>
  </nav>
</div>
  </header>
  
<?php
 
include_once 'conexao.php';
$BI_Encarregado = $_GET['BI_Encarregado'];
$_SESSION['BI_Encarregado']=$BI_Encarregado;

$querySelect=$conexao->query("select * from encarregado where BI_Encarregado='$BI_Encarregado'");
while ($registros=$querySelect->fetch_assoc()):

$BI_Encarregado=$registros['BI_Encarregado'];
$Nome_Completo=$registros['Nome_Completo'];
$Email=$registros['Email'];
$Telefone=$registros['Telefone'];
$Sexo=$registros['Sexo'];
$Morada=$registros['Morada'];
endwhile;
?> 

           <div class="container">
          <div class="row">
  <p>&nbsp;</p>
  <form    action="updateenc.php"   method="POST" class="col s12">
  <fieldset class="formulario" style="padding: 15px;">
    <legend><img src="pictures/avatar-13.png" class="circle" width="100"></legend>
    <h5 class="light center">Editar Encarregado</h5>

                       <div class="input-field col s6">
                <i class="fas fa-id-badge prefix"></i>
                <input type="text" name="BI_Encarregado" id="BI_Encarregado" value="<?php echo $BI_Encarregado ?>" >
                <label for="BI_Encarregado">BI</label>
              </div>
              <div class="input-field col s6">
                 <i class="fas fa-user prefix"></i>
                <input type="text" name="Nome_Completo" id="Nome_Completo" value="<?php echo $Nome_Completo ?>" >
                <label for="Nome_Completo">Nome Completo</label>
              </div>
                            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" id="Email" value="<?php echo $Email ?>" >
                <label for="Email">Email</label>
              </div>

                            <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="Telefone" type="tel" name="Telefone" value="<?php echo $Telefone ?> ">
                            <label for="Telefone">Telefone</label>
                            </div>

                            <div class="input-field col s6">
                            <i class="fas fa-address-card prefix"></i>
                             <input id="Morada" type="text" name="Morada" value="<?php echo $Morada ?> ">
                             <label for="Morada">Morada</label>
                             </div>
                              
                        

                               <div class="input-field col s6">
                                <i class="fas fa-venus-mars prefix"></i>
                                 <select name="Sexo" id="Sexo" value="<?php echo $Sexo ?>">
                                 <option value="" disabled selected>Selecione o gênero</option>
                                <option value="Masculino">Masculino</option>
                               <option value="Feminino">Feminino</option>
                                </select>
                               </div>

                               <div class="input-field col s12">
                <input type="submit" class="btn blue" value="Actualizar"  style=" margin:0 1em 0 0;">

                <a href="encarregadoconsulta.php" class="btn red">Cancelar</a>
                
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