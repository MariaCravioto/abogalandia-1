<?php
	include('conexion.php');
	$user_id = $_GET['id'];
	if (!$user_id) {
		header('Location: login.php');
	}
	$mysqli = "SELECT id_user, username, email, password FROM usuarios WHERE id_user = $user_id";
	$result = $db->query($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container-fluid bkg-container">

	<?php include('userbar.php'); ?>
	<!-- <a href="perfiles.php">Ver Perfiles</a><br> -->



	<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
	?>
	<section class="text-center bckg-perfil" >
		<div class="row">
		 	<!-- <?php echo $row['id_user']; ?> -->
		 			<img src="assets/images/images.jpg" alt="" class="img-circle">
		</div>
		<div class="row">
				Usuario: <?php echo $row['username']; ?>
		</div>
		<div class="row">
			Email: <?php echo $row['email']; ?> <br>
		</div>
	</section>


			<?php
				$row_id_user = $row['id_user'];
				$mysqli = "SELECT id_post, id_user, post, url FROM publicaciones WHERE id_user = '$row_id_user' ORDER BY id_post DESC";
				$result = $db->query($mysqli);
			?>
			<div class="row">
				<aside class="sidenav col-md-4">
						<!-- info del perfil -->
						<p> Aprendiz de magia en Laboratoria (porque si hacemos un poco de magia).</p>
						<span><i class="fa fa-map-marker" aria-hidden="true"></i> CDMX, México</span>
						<span><i class="fa fa-calendar" aria-hidden="true"></i> Se unió en Enero 2018</span>
				</aside>
				<div class="col-md-8">
					<!-- esta linea pinta el textarea para que el usuario escriba el post -->
					<?php include('postbar.php'); ?>
				</div>
			</div>

			<article class="row">
				<?php
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				?>
					<!-- se pinta en pantalla el post del usuario -->
					<div class="panel panel-default col-md-offset-4 col-md-8"><?php echo $row['post']; ?>
							<div class="row">
								<div class="col-md-offset-8 col-md-4">
									<span> <i class="fa fa-heart fa-post" aria-hidden="true"></i></span>
									<span> <i class="fa fa-comment fa-post" aria-hidden="true"></i></span>
									<span> <i class="fa fa-trash fa-post" aria-hidden="true"></i></span>
								</div>
							</div>
					</div>
				<?php
						}
					} else {
						echo "0 Publicaciones";
					}
				?>
			</article>

	<?php
			}
		} else {
			echo "0 resultados";
		}
	?>

	</div>
</body>
</html>
