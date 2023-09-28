<?php
session_start();
$alert = "";
$flag = "";

if (!empty($_POST)) {

	if (!empty($_POST["registro"])) {
		$flag = "registro";
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pswd'] = $_POST['pswd'];
		$_SESSION['txt'] = $_POST['txt'];


	}
	if (!empty($_POST["login"])) {
		if ($_POST['emailLogin'] == $_SESSION['email'] & $_POST['pswdLogin'] == $_SESSION['pswd']) {
			$flag = "login";
			
		} else {
			$flag = "error";
		}

	}


}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<?php

			switch ($flag) {
				case '':
					print
						'<form action="" method="post" autocomplete="off">
								<label for="chk" aria-hidden="true">Registro</label>
								<input type="hidden" name="registro" value="registro" />
								<input type="text" name="txt" placeholder="Usuario" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" name="pswd" placeholder="Password" required="">
								<button>Registrar</button>
							</form>';
					break;
				case 'registro':
					echo '<div id="registro"> <h2>Registro Exitoso</h2></div>
					<button class="volver>Volver</button>
					
					';
					break;
				case 'login':
					echo '<div id="registro"> <h2>Bienvenido al sistema</h2></div>
					<a href="index.php">Volver</a>
					';
					break;
				case 'error':
					echo '<div id="registro"> <h2>Datos Invalidos</h2></div>
					<a  href="index.php">Volver</a>
					';
					break;
			}


			?>
		</div>

		<div class="login">
			<?php
			if ($flag == "") {
				print('<form action="" method="post" autocomplete="off">
				<input type="hidden" name="login" value="login" />
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="emailLogin" placeholder="Email" required="">
				<input type="password" name="pswdLogin" placeholder="Password" required="">
				<button>Login</button>
				<div id="contrasenia">
					<a href="https://es.wikipedia.org/wiki/Adam_Elsheimer">
						<h6>Olvidaste la contraseña?</h6>
					</a>

				</div>

			</form>');
			}

			?>
		</div>
	</div>
	

</body>

</html>