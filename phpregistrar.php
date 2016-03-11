<?php 
require_once'conectar.php';

$v1=$_POST['Id_Proyecto'];
$v2=$_POST['nomProyecto'];
$v3=$_POST['nombreUno'];
$v4=$_POST['nombreDos'];
$v5=$_POST['nombreTres'];
$v6=$_POST['nombreAsesor'];
$v7=$_POST['fecha'];
$v8=$_POST['nota'];
$v9=$_POST['linea'];

try
{
 
  $stmt = $con->prepare('INSERT INTO requisito (Id_Proyecto, NomProyecto, NomUno, NomDos, NomTres, NomAsesor, Fecha, Nota, Linea) VALUES (:id, :proyecto, :uno, :dos, :tres, :asesor, :fecha, :nota, :linea)');
  $rows = $stmt->execute( array( ':id'   => $v1, ':proyecto' => $v2, ':uno' => $v3, ':dos' => $v4, ':tres' => $v5, ':asesor' => $v6, ':fecha' => $v7, ':nota' => $v8, ':linea' => $v9 ));
 
  if( $rows == 1 ){
header("location: registrar.php");
echo "<div id='mensaje'>
Datos Enviados
</div>";

  }
    
}
catch(PDOException $e)
{
  echo 'Error: ' . $e->getMessage();
}

?>