<?php
	include('conexion.php');
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
	$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
	$mysqli_userbar = "SELECT id_user, username, email, password FROM usuarios WHERE (email = '$email' AND password = md5('$password') )";
	$result_userbar = $db->query($mysqli_userbar);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
			<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<?php

			if ( $email && $password ) {
				if ($result_userbar->num_rows > 0) {
					while($row_userbar = $result_userbar->fetch_assoc()) {
		?>
		<nav class="navbar navbar-default">
		  <div class="container-fluid background">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		       <img src="assets/images/logo2.png" alt="torre romana" class="img-responsive logo"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="index.php">Inicio</a></li>
						<li ><a href="perfil.php?id=<?php echo $row_userbar['id_user'] ?>">Mi Perfil</a></li>
						<li ><a href="perfiles.php">Contactos</a></li>
						<li ><a href="logout.php">Cerrar sesión</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<?php
					}
				}
			}
		?>
		<script
		  src="https://code.jquery.com/jquery-3.3.1.min.js"
		  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		  crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
