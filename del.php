<!DOCTYPE html>

<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/css/materialize.min.css">
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
            	$BI_Coordenador=$_GET['BI_Coordenador'];
              echo "<a href='deletefunc.php?BI_Coordenador=$BI_coordenador' class='btn green' style='margin:0 1em 0 0;'>Sim</a>";
              echo "<a href='funciconsulta.php' class='btn red'>Não</a>";
              ?>
            </div>
          </div>
        </div>
      </div>
          

	<script type="text/javascript" src="scripts/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="scripts/js/materialize.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
      
  });
  </script>
</body>
</html>
</body>
</html>