<?php
require_once 'crud.entidad.php';
require_once 'crud.model.php';

// Logica
$alm = new Crud();
$model = new CrudModel();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{	
		case 'eliminar':
			$model->Eliminar($_REQUEST['Id_Proyecto']);
			header('Location: modificar.php');
			break;

		
	}
}

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

    <script>
        $(function(){
            $('.datepicker').datepicker();
        });
    </script>


</head>
<body>     
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
                 
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"> <img id="logo" src="img/logo.png"></a>
                </div>
                 <div>
                    <ul class="nav navbar-nav navbar-right">
                          <li><a href="mostrar.php"><span class="glyphicon glyphicon-search"></span> Ver Proyectos</a></li>
                          <li><a href="registrar.php"><span class="glyphicon glyphicon-folder-open"></span> Registrar Proyecto</a></li> 
                          <li class="active"><a href="eliminar.php"><span class="glyphicon glyphicon-trash"></span> Eliminar Proyecto</a></li> 
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
        


        <div id="formmodificar" class="container form-group">
        <h2>Eliminar</h2>
          <p>Escoja el Proyectos a Eliminar</p> 
		
        </div>


                
                <div class="container">
                <table class="table table-striped"  class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Id</th>
                            <th style="text-align:left;">Proyecto</th>
                            <th style="text-align:left;">Nombre 1</th>
                            <th style="text-align:left;">Nombre 2</th>
                            <th style="text-align:left;">Nombre 3</th>
                            <th style="text-align:left;">Asesor</th>
                            <th style="text-align:left;">Fecha</th>
                            <th style="text-align:left;">Nota</th>
                            <th style="text-align:left;">Linea</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Id_Proyecto'); ?></td>
                            <td><?php echo $r->__GET('NomProyecto'); ?></td>
                            <td><?php echo $r->__GET('NomUno'); ?></td>
                            <td><?php echo $r->__GET('NomDos'); ?></td>
                            <td><?php echo $r->__GET('NomTres'); ?></td>
                            <td><?php echo $r->__GET('NomAsesor'); ?></td>
                            <td><?php echo $r->__GET('Fecha'); ?></td>
                            <td><?php echo $r->__GET('Nota'); ?></td>                            
                            <td><?php echo $r->__GET('Linea'); ?></td>
                            
                            <td>
                                <a class="btn btn-info btn-xs" href="?action=eliminar&Id_Proyecto=<?php echo $r->Id_Proyecto; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>      		 
                </div>

</body>
</html>