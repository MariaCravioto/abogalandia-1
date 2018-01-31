<?php
	include('conexion.php');
	$mysqli = "SELECT id_user, username, email, password FROM usuarios";
	$result = $db->query($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfiles</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container-fluid bckg-perfil">

		<?php include('userbar.php'); ?>
		<h4>Da click para ver el perfil del usuario. </h4>
		<?php
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
		?>
			<div class="row">
				<div class="col-md-6 text-uppercase">
					<span> Usuario: <i class="fa fa-user-o fa-3x" aria-hidden="true"></i><a href="perfil.php?id=<?php echo $row['id_user'] ?>"><?php echo $row['username']; ?></a></span>
					<hr>
				</div>
			</div>

			<?php
				}
			} else {
				echo "0 resultados";
			}
			?>
	</div>
</body>
</html>
