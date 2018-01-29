<?php
	include('conexion.php');
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
	$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
	$mysqli_userbar = "SELECT id_user, username, email, password FROM usuarios WHERE (email = '$email' AND password = md5('$password') )";
	$result_userbar = $db->query($mysqli_userbar);
?>

	<?php
		
		if ( $email && $password ) {
			if ($result_userbar->num_rows > 0) {
				while($row_userbar = $result_userbar->fetch_assoc()) {
	?>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="perfil.php?id=<?php echo $row_userbar['id_user'] ?>">Mi Perfil</a></li>
		<li><a href="perfiles.php">Ver todos los perfiles</a></li>
		<li><a href="logout.php">Cerrar sesión</a></li>
	</ul>
	<?php
				}
			}
		}
	?>