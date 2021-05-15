<?php
    if(!isset($_COOKIE['username'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>


<?php
    if(!isset($_COOKIE['username'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>

<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<head>
    <title></title>
</head>
<body>

 <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
    <p>&nbsp;</p>
   <p>&nbsp;</p>

<div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card cyan darken-1">
             <div class="card-content white-text">
              <span class="card-title">Aviso</span>
              <p>&nbsp;</p><?php
              echo "<span class='card-title align center'><h6>Tem certeza que quer excluir este registro?</h6></span>";
              ?>
            </div>
            <div class="card-action center"><?php
                $BI_coordenador=$_GET['BI_Coordenador'];
              echo "<a href='deletefunc.php?BI_Coordenador=$BI_coordenador' class='btn green' style='margin:0 1em 0 0;'>Sim</a>";
              echo "<a href='funciconsulta.php' class='btn red'>Não</a>";
              ?>
            </div>
          </div>
        </div>
      </div>






















    <!--
    <div class="row container">
    <div class="col s12 m6">
              <div class="card small cyan darken-1">
                <div class="card-content white-text"><?php
                #echo "<span class='card-title'><h6>Tem certeza que quer excluir este resgistro?</h6></span>";


                    #$BI_Encarregado=$_GET['BI_Encarregado'];
                    #echo "<a href='deleteenc.php?BI_Encarregado=$BI_Encarregado' class='btn green' style='margin:0 1em 0 0;'>Sim</a>";
                    #echo "<a href='encarregadoconsulta.php' class='btn red'>Não</a>";

                    ?>
                </div>
                </div>
            </div>
    </div>
    -->

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

  });
  </script>
</body>
</html>

























<!--<?php

$BI_coodernador=filter_input(INPUT_GET,'BI_Coordenador',FILTER_SANITIZE_NUMBER_INT);
/*echo '<h3>Tem certeza que quer excluir este resgistro?</h3>';
echo "<a href='deletefunc.php?BI_Coordenador=$BI_coodernador'>Sim</a>|";
echo "<a href='funciconsulta.php'>Não</a>";*/
#echo "
    #<script src='scripts/deletefunc.js'></script>
    #<script>
        #if(confirm('Deseja mesmo apagar esta conta?')){
            deleter.delete('$BI_coodernador');
        }
        #else{
            history.back();
        }
   # </script>
#";-->


?>-->


