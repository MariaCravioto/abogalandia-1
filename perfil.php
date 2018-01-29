<?php
	include('conexion.php');
	$user_id = $_GET['id'];
	if (!$user_id) {
		header('Location: index.php');
	}
	$mysqli = "SELECT id_user, username, email, password FROM usuarios WHERE id_user = $user_id";
	$result = $db->query($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>
	<?php include('userbar.php'); ?>
	<a href="perfiles.php">Da click aquí para ver el listado de usuarios</a><br>

	<?php include('postbar.php'); ?>

	<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
	?>
			ID: <?php echo $row['id_user']; ?><br>
			Usuario: <?php echo $row['username']; ?><br>
			Email: <?php echo $row['email']; ?> <br>
			<hr>

			<?php 
				$row_id_user = $row['id_user'];
				$mysqli = "SELECT id_post, id_user, post, url FROM publicaciones WHERE id_user = '$row_id_user' ORDER BY id_post DESC";
				$result = $db->query($mysqli);
			?>
				<ul>
				<?php
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				?>
					<li><?php echo $row['post']; ?></li>
				<?php
						}
					} else {
						echo "0 Publicaciones";
					}
				?>
				</ul>

	<?php
			}
		} else {
			echo "0 resultados";
		}
	?>


</body>
</html>