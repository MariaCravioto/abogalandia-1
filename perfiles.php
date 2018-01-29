<?php
	include('conexion.php');
	$mysqli = "SELECT id_user, username, email, password FROM usuarios";
	$result = $db->query($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('userbar.php'); ?>
	Da click para ver el perfil del usuario. <br>
	<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
	?>
			
			Usuario: <a href="perfil.php?id=<?php echo $row['id_user'] ?>"><?php echo $row['username']; ?></a><br>
			<hr>

	<?php
			}
		} else {
			echo "0 resultados";
		}
	?>

</body>
</html>