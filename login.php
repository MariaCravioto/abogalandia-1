<?php
	include('conexion.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
</head>
<body>
	<?php
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$enviar = isset($_POST['enviar']) ? $_POST['enviar'] : '';
	?>
	<header class="background">
		<nav class="row">
			<div class="col-md-12">
				<img src="assets/images/logo.jpg" alt="">
				<h1>Abogalandia</h1>
			</div>
		</nav>
	</header>

	<?php
		if ($enviar == '') {
	?>
		Favor de Completar el siguiente formulario <br>
		<form action="" method="POST">
			<label>Email:</label> <input type="email" name="email"><br>
			<label>Contraseña:</label> <input type="password" name="password"><br>
			<input type="submit" name="enviar" value="Ingresar">
		</form>
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
				Ingreso satisfactorio. Da click para ir a tu perfil <a href="perfil.php?id=<?php echo $row['id_user']; ?>"><?php echo $row['email']; ?></a> <br>
				<hr>

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
