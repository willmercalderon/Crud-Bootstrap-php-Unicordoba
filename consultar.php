<?php 

require_once'conectar.php';
require_once'modificar.php';

$v1=$_POST['id'];


try{
	 $conn = new PDO('mysql:host=localhost;dbname=tesis', 'root', '');
 $sql = $conn->prepare('SELECT * FROM requisito WHERE Id_Proyecto = :id');
 $sql->execute(array(':id' => $v1));
 $resultado = $sql->fetchAll();
foreach ($resultado as $row) {


echo $row["Id_Proyecto"];

echo $row["NomProyecto"];

echo $row["NomUno"];

echo $row["NomDos"];

echo $row["NomTres"];

echo $row["NomAsesor"];

echo $row["Fecha"];

echo $row["Nota"];

echo $row["Linea"];
}
}catch(PDOException $e){
echo "ERROR: " . $e->getMessage();
}

 ?>