<?php
	include('conexion.php');
	$id_user = isset($_GET['id']) ? $_GET['id'] : '';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
	$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
	$status = isset($_POST['status']) ? $_POST['status'] : '';
	$submit = isset($_POST['submit']) ? $_POST['submit'] : '';
	$mysqli_userbar = "SELECT id_user, username, email, password FROM usuarios WHERE (email = '$email' AND password = md5('$password') )";
	$result_userbar = $db->query($mysqli_userbar);
?>

	<?php
		
		if ( $email && $password ) {
			if ($result_userbar->num_rows > 0) {
				while($row_userbar = $result_userbar->fetch_assoc()) {
					if ($row_userbar['id_user'] == $id_user ) {
						if ($submit == '') {
	?>
		<form action="" method="POST">
			<textarea placeholder="Qué está pasando!?" name="status"></textarea>
			<input type="submit" name="submit" value="Publicar">
		</form>
	<?php
						} else {
							$sql = "INSERT INTO publicaciones (id_user, post, url)
							VALUES ('$id_user', '$status', '')";
							if ($db->query($sql) === TRUE) {
								echo "<h1>Graciar por publicar</h1>";
							} else {
								echo "Error: " . $sql . "<br>" . $db->error;
							}
						}
					}
				}
			}
		}
	?>
