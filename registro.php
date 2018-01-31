<?php
	include('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Abogalandia</title>
	<!-- CDN iconos -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- CDN fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Gentium+Book+Basic|Hind+Siliguri|Poiret+One" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<div class="container-fluid">

	<?php
		// se delcaran variables
		$username =  isset($_POST['username']) ? $_POST['username'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$enviar = isset($_POST['enviar']) ? $_POST['enviar'] : '';
	?>

	<?php
		if ($enviar == '') {
	?>
		Favor de Completar el siguiente formulario <br>
		<!-- xs -->
    <div class="hidden-sm hidden-md hidden-lg vh-total mobile">
     <div class="row">
      <a href="../../index.html"><i class="col-xs-3 col-sm-3 col-md-3 fa fa-angle-left back" aria-hidden="true"></i></a>
      <h1 class="text-center">Sign up</h1>
			<form action="" method="POST">
      <div class="form">
       <i class="fa fa-user-circle col-xs-2 col-sm-2 col-xs-offset-1 col-sm-offset-1" aria-hidden="true"></i><input class="col-xs-8 col-sm-8" type="text" name="name" value="" placeholder="Name">
       <i class="fa fa-envelope-open col-xs-2 col-sm-2 col-xs-offset-1 col-sm-offset-1" aria-hidden="true"></i><input class="col-xs-8 col-sm-8" type="email" name="email" value="" placeholder="Email">
       <i class="fa fa-unlock-alt col-xs-2 col-sm-2 col-xs-offset-1 col-sm-offset-1" aria-hidden="true"></i><input class="col-xs-8 col-sm-8" type="password" name="password" value="" placeholder="Pasword">
      </div>
      <<input type="submit" name="enviar" value="Regístrame" class="btn btn-secundary col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 btn-log btn-registro" >
			</form>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 or">
       <h4 class="text-center">or</h4>
      </div>
      <div class="click">
       <button class="btn btn-secundary col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 btn-registro btn-face" type="button" name="button"><i class="pull-left fa fa-facebook" aria-hidden="true"></i>Facebook</button>
       <button class="btn btn-secundary col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 btn-registro btn-twi" type="button" name="button"><i class="pull-left fa fa-twitter" aria-hidden="true"></i>Twitter</button>
       <button class="btn btn-secundary col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 btn-registro btn-goo" type="button" name="button"><i class="pull-left fa fa-google-plus" aria-hidden="true"></i>Login with google</button>
      </div>
     </div>
    </div>
     <!-- desktop -->
    <div class="hidden-xs vh-total desktop">
     <div class="container-fluid desktop">
       <a href="../../index.html"><i class="col-xs-3 col-sm-3 col-md-3 fa fa-angle-left back-desk" aria-hidden="true"></i></a>
       <h1 class="text-center">Sign up</h1>
			<form action="" method="POST">
       	<div class="form-desk">
       		<div class="col-sm-12 col-md-12 col-lg-12">
         		<i class="fa fa-user-circle col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" aria-hidden="true"></i><input class="col-xs-8 col-sm-6 col-md-6 col-lg-6" type="text" name="username" value="" placeholder="Name">
       		</div>
       	<div class="col-sm-12 col-md-12 col-lg-12">
         <i class="fa fa-envelope-open col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" aria-hidden="true"></i><input class="col-xs-8 col-sm-6 col-md-6 col-lg-6" type="email" name="email" value="" placeholder="Email">
       </div>
       <div class="col-sm-12 col-md-12 col-lg-12">
        <i class="fa fa-unlock-alt col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" aria-hidden="true"></i><input class="col-xs-8 col-sm-6 col-md-6 col-lg-6" type="pasword" name="pasword" value="" placeholder="Pasword">
       </div>
       </div>
			 <input class="btn btn-secundary btn-desk col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 btn-log" type="submit" name="enviar" value="Regístrame">
			</form>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 or">
        <h4 class="text-center">or</h4>
       </div>
       <div class="click">
        <button class="btn btn-secundary btn-desk col-xs-10 col-sm-6 col-xs-offset-3 btn-registro btn-face" type="button" name="button"><i class="pull-left fa fa-facebook" aria-hidden="true"></i>Facebook</button>
        <button class="btn btn-secundary btn-desk col-xs-10 col-sm-6 col-xs-offset-3 btn-registro btn-twi" type="button" name="button"><i class="pull-left fa fa-twitter" aria-hidden="true"></i>Twitter</button>
        <button class="btn btn-secundary btn-desk col-xs-10 col-sm-6 col-xs-offset-3 btn-registro btn-goo" type="button" name="button"><i class="pull-left fa fa-google-plus" aria-hidden="true"></i>Login with google</button>
       </div>
      </div>
     </div>

	<?php
		} else {
        // se guarda la informción en a base de datos (usuarios)
				$mysqli = "SELECT email FROM usuarios WHERE email = '$email'";
				$result = $db->query($mysqli);
				if ($result->num_rows <= 0) {
					// se envia la informacion a la base de datos
					$sql = "INSERT INTO usuarios (username, email, password)
					-- se encripta la contraseña ingresada por el usuario
					VALUES ('$username', '$email', MD5('$password'))";

					if ($db->query($sql) === TRUE) {
						echo "<h1>Gracias por registrarte</h1>";
					} else {
						echo "Error: " . $sql . "<br>" . $db->error;
					}
				}

				else {
					// si inentan registrarte con el mismo correo, ya no te deja
					echo "<h1>Email ya utilizado</h1>";
				}

		}
	?>

	</div>
</body>
</html>
