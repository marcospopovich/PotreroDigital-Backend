<?php
$alert = "";

if(!empty($_POST)){
    if($_POST["usuario"]== "pepe" && $_POST["clave"] == 1234){
        echo "<h3>ingreso</h3>";
    }else{
        $alert = '<h3>Login Incorrecto</h3>';
    }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<title>Login | Potrero Digital</title>
	
</head>
<body>
	<div class="container">

			<form action="" method="post" autocomplete="off">
	<div class="">
	<div class="">
				
			
			<div><?php echo isset($alert) ? $alert: ''; ?></div>
			<h3>Ingrese Usuario</h3>
	<div class="form-group">
			<input type="text" name="usuario" placeholder="Usuario" class="form-control" autofocus>
	</div>
			<h3>Ingrese contraseña</h3>
	<div class="form-group">
			<input type="password" name="clave" placeholder="Contraseña" class="form-control">
			
	
	</div>	
	<div>
	<input type="submit" value="Iniciar sesión" class="btn">
	</div>

		</form>
		</div>
		</div>

</div>




<footer>     
</footer>	

</body>
</html>