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
		case 'actualizar':
			$alm->__SET('Id_Proyecto',  $_REQUEST['Id_Proyecto']);
			$alm->__SET('NomProyecto',  $_REQUEST['NomProyecto']);
			$alm->__SET('NomUno',       $_REQUEST['NomUno']);
			$alm->__SET('NomDos',       $_REQUEST['NomDos']);
			$alm->__SET('NomTres', 		$_REQUEST['NomTres']);
			$alm->__SET('NomAsesor', 	$_REQUEST['NomAsesor']);
			$alm->__SET('Fecha', 		$_REQUEST['Fecha']);
			$alm->__SET('Nota', 		$_REQUEST['Nota']);
			$alm->__SET('Linea', 		$_REQUEST['Linea']);

			$model->Actualizar($alm);
			header('Location: modificar.php');
			break;


		case 'editar':
			$alm = $model->Obtener($_REQUEST['Id_Proyecto']);
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
        <div class="ejemplo3">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="container-fluid">
                 
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img id="logo" src="img/logo.png"> </a>
                </div>
                 <div>
                    <ul class="nav navbar-nav navbar-right">
                          <li><a href="mostrar.php"><span class="glyphicon glyphicon-search"></span> Ver Proyectos</a></li>
                          <li><a href="registrar.php"><span class="glyphicon glyphicon-folder-open"></span> Registrar Proyecto</a></li> 
                          <li><a href="eliminar.php"><span class="glyphicon glyphicon-trash"></span> Eliminar Proyecto</a></li> 
                          <li class="active"><a href="modificar.php"><span class="glyphicon glyphicon-edit"></span> Modificar Proyecto</a></li> 
                           
                    </ul>
                 </div>

            </div>
         </nav> 
         </div>


         <div class="banner">
        <div class="container">
            <h1>Twitter Bootstrap 3: Responsive Design Tutorial</h1>
            <p>A comprehensive tutorial showing you how to quickly create responsive designs using Twitter Bootstrap 3.</p>
        </div>
    </div>
        


        <div id="formmodificar" class="container form-group">
        <h2>Modificar</h2>
          <p>Seleccione el proyecto a Editar:</p> 
		<form action="?action=<?php echo $alm->Id_Proyecto > 0 ? 'actualizar' : 'registrar'; ?>" method="post" role="form" >     
                    <div class="row">               
                    <label class="control-label col-xs-4">Id:</label>
                    <label class="control-label col-xs-4">Proyecto:</label>
                    <label class="control-label col-xs-4">Alumno 1:</label>
                    </div>

                    <div class="row">                        
                            <div class="form-group col-xs-4">                            
                                <input type="number" class="form-control" name="Id_Proyecto" value="<?php echo $alm->__GET('Id_Proyecto'); ?>"/>                       
                             </div>                        
                             <div class="form-group col-xs-4">                             
                                <input type="text" class="form-control" name="NomProyecto" value="<?php echo $alm->__GET('NomProyecto'); ?>"/>
                            </div>                        
                            <div class="form-group col-xs-4">                            
                                    <input type="text" class="form-control" name="NomUno" value="<?php echo $alm->__GET('NomUno'); ?>"/>
                            </div>  
                    </div>

                    <div class="row">               
                    <label class="control-label col-xs-4">Alumno 2:</label>
                    <label class="control-label col-xs-4">Alumno 3:</label>
                    <label class="control-label col-xs-4">Asesor:</label>
                    </div>

                    <div class="row">
                            
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="NomDos" value="<?php echo $alm->__GET('NomDos'); ?>"/>
                                 </div>
                                  <div class="col-xs-4">                        
                                    <input type="text" class="form-control" name="NomTres" value="<?php echo $alm->__GET('NomTres'); ?>"/>
                                </div>
                                 <div class="col-xs-4">
                                    <input type="text"class="form-control" name="NomAsesor" value="<?php echo $alm->__GET('NomAsesor'); ?>"/>
                                </div>
                     </div>

                    <div class="row">               
                    <label class="control-label col-xs-4">Fecha:</label>
                    <label class="control-label col-xs-4">Nota:</label>
                    <label class="control-label col-xs-4">Linea:</label>
                    </div>

                    <div class="row">
                         
                                <div class="col-xs-4">
                                    <input type="datepicker" class="datepicker form-control" name="Fecha" value="<?php echo $alm->__GET('Fecha'); ?>"/>
                                </div>
                                <div class="col-xs-4">
                                    <input type="number" class="form-control" name="Nota" value="<?php echo $alm->__GET('Nota'); ?>"/>
                                 </div>
                                <div class="col-xs-4">   
                                    <input type="text" class="form-control" name="Linea" value="<?php echo $alm->__GET('Linea'); ?>" />
                                </div>
                    </div>
                
                <br>
                <div align="left" class="row" style="padding-left: 17px; ">      
                                <button style="width: 200px;" type="submit" class="btn btn-mg btn-primary">Guardar</button>
                                <!--<input style="width: 200px;" class="btn btn-mg btn-primary" type='reset' name='ilimpiar' value='Limpiar'/>-->
                       </div>    
                        
                </form>
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
                                <a class="btn btn-info btn-xs" href="?action=editar&Id_Proyecto=<?php echo $r->Id_Proyecto; ?>">Editar</a>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>      		 
                </div>

</body>
</html>