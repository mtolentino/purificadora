<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>PURIFICADORA TAMOXIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
				<script type="text/javascript"src='js/jquery-1.10.2.min.js'></script>
		<script type="text/javascript" src="js/ajaxo.js"></script>

    </head>
    <body>
    	<!-- contenedor delancho o wraapper -->
	   <div id="container">
				<!--encabezado  -->
			<header>
				<h1><a href="index.php"><img id='logo'src="images/logo.png" ></a></h1>
				<div id='log'><button>Iniciar sesion</button>
			</header>

				<!-- bloque del login -->
			<div id='login'>
				
				<form action="login.php" method="post">
					<ul id='form'>
						<h3>Inicie Sesion</h3>
								<li><label class='white'> USUARIO </label></li>
								<li><input type="text" id="usuario" name="usuario" placeholder="usuario"></li><br>
								<li><label class='white'> PASSWORD </label></li>
								<li><input type="password" id="password" name="password" placeholder="contrasena"></li><br>

					</ul>
					
						<input type="submit" value="ENTRAR" id="Entrar">
					
					</form>

			</div>						
			<!-- bloque del lo stabs -->
			<section id="tabs">
		        <ul>

		        	<li id='mision' >Mision</li>
		        	<li id='vision'>Vision</li>
		        	<li id='valores'>Valores</li>
		        	<li id='objetivo'>Objetivo</li>
		        	<li id='compromiso'>Compromiso</li>
		        </ul>
		        <div id='uno'>
				        <h2>Mision</h2>
				        <p>

				        	Producir y vender agua purificada de excelente calidad,<br> mediante la supervisión estricta y rigurosa en cada proceso de producción con el objetivo de <br>mantener satisfechos a los consumidores.

				        </p>
				</div>
		        <!-- cierre de tans -->
			</section>
			<!-- contenedor del ancho -->
			<footer>betersusdev | Sistema de agua C2013 |Visitame wwww.ejemplo.com</footer>
        </div>
		
		
		
		
    </body>
</html>