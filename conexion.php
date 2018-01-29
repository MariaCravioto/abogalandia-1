<?php
	$db = new mysqli('localhost', 'root', '', 'laboratoria_2');
	mysqli_set_charset( $db, 'utf8' );


	if($db->connect_errno){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>