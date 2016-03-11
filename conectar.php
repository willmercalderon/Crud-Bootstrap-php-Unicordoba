<?php
$mysqli=new mysqli("localhost","root","","tesis");

$con = new PDO('mysql:host=localhost;dbname=tesis', 'root', '');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

?>
