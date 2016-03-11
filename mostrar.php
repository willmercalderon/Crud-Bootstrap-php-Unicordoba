<?php
    require('conectar.php');
    
    $query="SELECT *  FROM requisito";

    $resultado=$mysqli->query($query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscripcion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/datepicker.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

</head>
	<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
		    <div class="container-fluid">
				 
		      	<div class="navbar-header">
			        <a class="navbar-brand" href="index.html"><img id="logo" src="img/logo.png"></a>
			    </div>
			     <div>
			        <ul class="nav navbar-nav navbar-right">
				          <li class="active"><a href="mostrar.php"><span class="glyphicon glyphicon-search"></span> Ver Proyectos</a></li>
				          <li><a href="registrar.php"><span class="glyphicon glyphicon-folder-open"></span> Registrar Proyecto</a></li> 
				          <li><a href="eliminar.php"><span class="glyphicon glyphicon-trash"></span> Eliminar Proyecto</a></li> 
				          <li><a href="modificar.php"><span class="glyphicon glyphicon-edit"></span> Modificar Proyecto</a></li> 
				           
			        </ul>
			     </div>

		    </div>
 		 </nav>	

 		 <div class="banner">
        <div class="container">
            <h1>Desarrollo WEB</h1>
            <p>Crud - Registro de Proyecto de grado</p>
        </div>
    	</div>
			

	<div class="container">
		  <h2>Tabla de Registros</h2>
		  <p>Informacion de los proyectos registrados:</p>            
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Id Proyecto</th>
		        <th>Proyecto</th>
		        <th>Nombre 1</th>
		        <th>Nombre 2</th>
		        <th>Nombre 3</th>
		        <th>Asesor</th>
		        <th>Fecha</th>
		        <th>Nota</th>
		        <th>Linea</th>
		      </tr>
		    </thead>
		    <tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['Id_Proyecto'];?>
							</td>
							<td>
								<?php echo $row['NomProyecto'];?>
							</td>
							<td>
								<?php echo $row['NomUno'];?>
							</td>
							<td>
								<?php echo $row['NomDos'];?>
							</td>
							<td>
								<?php echo $row['NomTres'];?>
							</td>
							<td>
								<?php echo $row['NomAsesor'];?>
							</td>
							<td>
								<?php echo $row['Fecha'];?>
							</td>
							<td>
								<?php echo $row['Nota'];?>
							</td>
							<td>
								<?php echo $row['Linea'];?>
							</td>
						</tr>

					<?php } ?>
				</tbody>
		    
		  </table>
		</div>

	</body>
</html>