<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">
	    <link rel="stylesheet" type="text/css" href="icons/fonts/material-icons.css">
	<title></title>
</head>
<body>
<p>&nbsp;</p>
<div class="row">
		<div class="col s12 m4 offset-m4">
			<div class="card">

              
				<div class="card-action cyan white-text">
					<h3 class="light"><u style="border-radius: 35px;">Arquivos</u></h3>
					
				</div>

				<div class="card-content">
					<div class="file-field input-field">
                    <div class="btn cyan">
                    <span>Arquivo</span>
                   <input type="file" multiple>
                   </div>
                <div class="file-path-wrapper">
                 <input class="file-path validate" type="text" placeholder="Faça upload de um ou mais arquivos">
                 </div>
                 </div>

					<div class="input-field col s12">
   							 <i class="fas fa-user prefix cyan-text"></i>
   							<input type="text" name="nomecompleto" id="nomecompleto" maxlength="50">
   							<label for="nomecompleto">Autor</label>
   						</div>
                         
                        <!-- <div class="input-field col s12">
                            <i class="fas fa-calendar-day prefix cyan-text"></i>
                             <input  type="date" id="data"  nome="date"/>
                             <label for="data"></label>
                             </div>-->

					<div class="form-field">
						<button class="btn-large waves-effect cyan" style="width:100%;">Enviar</button>
					</div><br>
                   
				   </div>

		 </div>
		</div>
		
      </div>


<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>