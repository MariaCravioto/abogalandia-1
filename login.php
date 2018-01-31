<?php
	include('conexion.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	</head>
</head>
<body>
	<!-- En esta linea al ingresar los datos los compara y con POST los oculta ya que con GET
	los datos del usuario se mostraban en la barra del url -->
	<?php
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$enviar = isset($_POST['enviar']) ? $_POST['enviar'] : '';
	?>

	<?php
		if ($enviar == '') {
	?>
	<!-- sm/md/lg -->
	   <div class="hidden-xs vh-total desktop">
	     <div class="container-fluid desk">
				 <div class="row">
					 <a href="index.php"><i class="col-xs-3 col-sm-3 col-md-3 col-lg-3 fa fa-angle-left pull-left back-desk fa-login" aria-hidden="true"></i></a>
					 <h1 class="text-center">Log in</h1>
				 </div>
					<form action="" method="POST">
							<div class="form-desk">
	       				<div class="col-md-12 col-sm-12 col-lg-12 email">
	       					<i class="fa fa-envelope-o fa-fw col-xs-2 col-sm-1 col-md-1 col-lg-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 fa-login" aria-hidden="true"></i><input class="col-xs-8 col-sm-8 col-md-8 col-lg-6" type="email" name="email" placeholder="email">
	     					</div>
	     					<div class="col-sm-12 col-md-12 col-lg-12 pasword">
	       					<i class="fa fa-unlock-alt col-xs-2 col-sm-1 col-md-1 col-lg-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 fa-login" aria-hidden="true"></i><input class="col-xs-8 col-sm-8 col-md-8 col-lg-6 " type="password" name="password" placeholder="Pasword">
	     					</div>
	    					</div>
							<input type="submit" name="enviar" value="Ingresar" class="btn btn-secundary btn-desk col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
					</form>

	     </div>
	     <div class="click-desk">
	      <h6 class="text-center">Did you forget your password?</h6>
	      <h6 class="text-center"> <a href="#">Click here</a> </h6>
	     </div>
	    </div>
	   </div>

		<!-- <form action="" method="POST">
			<label>Email:</label> <input type="email" name="email"><br>
			<label>Contraseña:</label> <input type="password" name="password"><br>
			<input type="submit" name="enviar" value="Ingresar">
		</form> -->
	<?php
		} else {
	?>

		<?php
			$mysqli = "SELECT id_user, email, password FROM usuarios WHERE (email = '$email' AND password = md5('$password'))";
			$result = $db->query($mysqli);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {

					$_SESSION["email"] = $email;
					$_SESSION["password"] = $password;
		?>
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="assets/images/logo2.png" alt="">
			</div>
			<h1 class="text-center">Ingreso satisfactorio.</h1>

			<p class="text-center">Da click para ir a tu perfil <a href="perfil.php?id=<?php echo $row['id_user']; ?>"><?php echo $row['email']; ?></a> <br>
				<hr>
			</p>
		</div>


		<?php
				}
			} else {
				echo "Favor de revisar tus datos.";


			}
		?>


	<?php
		}
	?>


</body>
</html>
