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
                    <a class="navbar-brand" href="index.html"><img id="logo" src="img/logo.png"></a>
                </div>
                 <div>
                    <ul class="nav navbar-nav navbar-right">
                          <li><a href="mostrar.php"><span class="glyphicon glyphicon-search"></span> Ver Proyectos</a></li>
                          <li class="active"><a href="registrar.php"><span class="glyphicon glyphicon-folder-open"></span> Registrar Proyecto</a></li> 
                          <li><a href="eliminar.php"><span class="glyphicon glyphicon-trash"></span> Eliminar Proyecto</a></li> 
                          <li><a href="modificar.php"><span class="glyphicon glyphicon-edit"></span> Modificar Proyecto</a></li> 
                           
                    </ul>
                 </div>

            </div>
         </nav> 

<div class="banner">
        <div class="container">
            <h1>Registrar</h1>
            <p>Llene los campos a registrar:</p>
        </div>
        </div>

         


<div id="formulario" class="form-horizontal">
            	

        <form class="form-horizontal" name="FormPrincipal"  method='POST' action='phpregistrar.php'>

            <div class="form-group">
                <label class="control-label col-xs-3">Id:</label>
                    <div class="col-xs-9">
                        <input class="form-control" placeholder="Id Proyecto" type='number' name='Id_Proyecto' required>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Proyecto:</label>
                    <div class="col-xs-9">
                        <input class="form-control" placeholder="Nombre del Proyecto" type='text' name='nomProyecto' required>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Alumno 1:</label>
                    <div class="col-xs-9">
                        <input class="form-control" placeholder="Nombre Alumno 1" type='text' name='nombreUno' required>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Alumno 2:</label>
                    <div class="col-xs-9">
                        <input class="form-control" placeholder="Nombre Alumno 2" type='text' name='nombreDos'>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Alumno 3:</label>
                    <div class="col-xs-9">
                        <input class="form-control" placeholder="Nombre Alumno 3" type='text' name='nombreTres'>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Asesor:</label>
                    <div class="col-xs-9">
                        <input class="form-control" placeholder="Nombre Asesor" type='text' name='nombreAsesor' required>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Fecha:</label>
                    <div class="col-xs-9">
                        <input  type="datepicker" class="datepicker form-control" placeholder="fecha" name='fecha' required>
                    </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-3">Nota:</label>
                    <div class="col-xs-9">
                        <input type='number' name='nota' class="form-control" placeholder="Nota del Proyecto" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Linea:</label>
                    <div class="col-xs-9">
                        <input type='text' name='linea' class="form-control" placeholder="Linea de Investigación" required>
                    </div>
            </div>
            
            <div id="grupoboton" class="form-inline">

                         <input class="btn btn-lg btn-primary" type='submit' name='iregistrar' value='Registrar'/>
                         <input class="btn btn-lg btn-primary" type='reset' name='ilimpiar' value='Limpiar'/>
                           <p class='ebuscar'>   <a href='buscar.html' title='Buscar'>
                                            ¿El usuario ya se registro?
                                                </a>
                            <p>            
            </div>

        </form>
</div>  
    			






 	 


</body>
</html>