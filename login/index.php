<?php
$alert = "";
$mensaje = "";
if(!empty($_POST)){

    if (!empty($_POST["registro"])){
		$mensaje = "registro";
	}
	if(!empty($_POST["login"])){
		$mensaje = "login";
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
				<form action="" method="post" autocomplete="off">
					<label for="chk" aria-hidden="true">Registro</label>
					<input type="hidden" name="registro" value="registro" />
					<input type="text" name="txt" placeholder="Usuario" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Ingresar</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="post" autocomplete="off">
				<input type="hidden" name="login" value="login" />
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="emailLogin" placeholder="Email" required="">
					<input type="password" name="pswdLogin" placeholder="Password" required="">
					<button>Login</button>
					<h6>Olvidaste la contraseña?</h6>	
				</form>
			</div>
	</div>
</body>
</html>

