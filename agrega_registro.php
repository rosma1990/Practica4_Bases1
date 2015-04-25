<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="icono.png" type="image/png" />
        <title>Practica4</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!-- El logotipo y el icono que despliega el menú se agrupan
            para mostrarlos mejor en los dispositivos móviles -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Crear Registros</a>
            </div>

            <!-- Agrupar los enlaces de navegación, los formularios y cualquier 
            otro elemento que se pueda ocultar al minimizar la barra  -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Crear Vehiculo</a></li>
                    <li><a href="#">Crear Ruta</a></li>
                    <li><a href="#">Crear Lugar</a></li>
                    <li><a href="#">Crear Estacion</a></li>
                    
                </ul>              
                <p class="navbar-text pull-right">
                    Conectado como <a href="#" class="navbar-link">Nombre Apellidos</a>
                </p>
            </div>
        </nav>
        
		<div class="container-fluid" size="200">
		  <div class="row-fluid">
		    <div class="span2">
		      <!--Sidebar content-->
		    </div>
		    <div class="span10" >
		      <!--Body content-->
		    	<div class="panel panel-default" ><!--AGREGAR VEHICULO-->
					<div class="panel-heading">
						<h3 class="panel-title">Crear Vehiculo</h3>
				  	</div>
				  	<div class="panel-body">
				  		<div id="agrega_vehiculo">
				    		<form class="form-horizontal" action= "regis.php" role="form" method="POST">
		                      <div class="form-group"> <label for="bus_placa" class="col-lg-2 control-label">Placa</label>
		                        <div class="col-lg-10"> <input type="text" class="form-control" id="bus_placa" name="bus_placa" placeholder="Placa">
		                        </div>
		                      </div>
		                      <div class="form-group"> <label for="bus_modelo" class="col-lg-2 control-label">Modelo</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="bus_modelo" name="bus_modelo" placeholder="Modelo">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="bus_marca" class="col-lg-2 control-label">Marca</label>
		                          <div class="col-lg-10"> <input type="text" class="form-control" id="bus_marca" name="bus_marca" placeholder="Marca">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="bus_chasis" class="col-lg-2 control-label">Chasis</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="bus_chasis" name="bus_chasis" placeholder="Chasis">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="usr" class="col-lg-2 control-label">Usuario</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="usr" name="usr" placeholder="Usuario">
		                        </div>
		                      </div>
		                      <div class="form-group">
		                        <div class="col-lg-offset-2 col-lg-10">
		                            <input type="submit" class="btn btn-primary btn-lg active" id="registrar" name="registrar" value ="Registrar">
		                            
		                        </div>

		                      </div>
		                    </form>
				    	</div>
				  	</div>
				</div>
		    	






				<div class="panel panel-default" ><!--EDITAR VEHICULO-->
					<div class="panel-heading">
						<h3 class="panel-title">Editar Vehiculo</h3>
				  	</div>
				  	<div class="panel-body">
				  		<div id="agrega_vehiculo">
				    		<form class="form-horizontal" action= "regis.php" role="form" method="POST">
		                      <div class="form-group"> <label for="bus_placa" class="col-lg-2 control-label">Placa</label>
		                        <div class="col-lg-10"> <input type="text" class="form-control" id="editar_bus_placa" name="editar_bus_placa" placeholder="Placa">
		                        </div>
		                      </div>
		                      <div class="form-group"> <label for="bus_modelo" class="col-lg-2 control-label">Modelo</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="editar_bus_modelo" name="editar_bus_modelo" placeholder="Modelo">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="bus_marca" class="col-lg-2 control-label">Marca</label>
		                          <div class="col-lg-10"> <input type="text" class="form-control" id="editar_bus_marca" name="editar_bus_marca" placeholder="Marca">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="bus_chasis" class="col-lg-2 control-label">Chasis</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="editar_bus_chasis" name="editar_bus_chasis" placeholder="Chasis">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="usr" class="col-lg-2 control-label">Usuario</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="usr" name="usr" placeholder="Usuario">
		                        </div>
		                      </div>
		                      <div class="form-group">
		                        <div class="col-lg-offset-2 col-lg-10">
		                            <input type="submit" class="btn btn-primary btn-lg active" id="registrar" name="registrar" value ="Registrar">
		                            
		                        </div>

		                      </div>
		                    </form>
				    	</div>
				  	</div>
				</div>







				<div class="panel panel-default" ><!--ELIMINAR VEHICULO-->
					<div class="panel-heading">
						<h3 class="panel-title">Eliminar Vehiculo</h3>
				  	</div>
				  	<div class="panel-body">
				  		<div id="agrega_vehiculo">
				    		<form class="form-horizontal" action= "regis.php" role="form" method="POST">
		                      <div class="form-group"> <label for="bus_placa" class="col-lg-2 control-label">Placa</label>
		                        <div class="col-lg-10"> <input type="text" class="form-control" id="eliminar_bus_placa" name="eliminar_bus_placa" placeholder="Placa">
		                        </div>
		                      </div>
		                      <div class="form-group"> <label for="bus_modelo" class="col-lg-2 control-label">Modelo</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="eliminar_bus_modelo" name="eliminar_bus_modelo" placeholder="Modelo">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="bus_marca" class="col-lg-2 control-label">Marca</label>
		                          <div class="col-lg-10"> <input type="text" class="form-control" id="eliminar_bus_marca" name="eliminar_bus_marca" placeholder="Marca">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="bus_chasis" class="col-lg-2 control-label">Chasis</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="eliminar_bus_chasis" name="eliminar_bus_chasis" placeholder="Chasis">
		                        </div>
		                      </div>
		                        <div class="form-group"> <label for="usr" class="col-lg-2 control-label">Usuario</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="usr" name="usr" placeholder="Usuario">
		                        </div>
		                      </div>
		                      <div class="form-group">
		                        <div class="col-lg-offset-2 col-lg-10">
		                            <input type="submit" class="btn btn-primary btn-lg active" id="registrar" name="registrar" value ="Registrar">
		                            
		                        </div>

		                      </div>
		                    </form>
				    	</div>
				  	</div>
				</div>


				<div class="panel panel-default"><!--CREAR RUTA-->
					<div class="panel-heading">
						<h3 class="panel-title">Crear Ruta</h3>
				  	</div>
				  	<div class="panel-body">
				  		<div id="agrega_ruta">
				    		<form class="form-horizontal" action= "regis.php" role="form" method="POST">
		                      <div class="form-group"> <label for="ruta_nombre" class="col-lg-2 control-label">Nombre</label>
		                        <div class="col-lg-10"> <input type="text" class="form-control" id="ruta_nombre" name="ruta_nombre" placeholder="Nombre">
		                        </div>
		                      </div>
		                      <div class="form-group"> <label for="ruta_descripcion" class="col-lg-2 control-label">Descripcion</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="ruta_descripcion" name="ruta_descripcion" placeholder="Descripcion">
		                        </div>
		                      </div>
		                        
		                      
		                      <div class="form-group">
		                        <div class="col-lg-offset-2 col-lg-10">
		                            <input type="submit" class="btn btn-primary btn-lg active" id="registrar" name="registrar" value ="Registrar">
		                            
		                        </div>

		                      </div>
		                    </form>
				    	</div>
				  	</div>
				</div>












				<div class="panel panel-default"><!--CREAR LUGAR-->
					<div class="panel-heading">
						<h3 class="panel-title">Crear Lugar</h3>
				  	</div>
				  	<div class="panel-body">
				  		<div id="agrega_Lugar">
				    		<form class="form-horizontal" action= "regis.php" role="form" method="POST">
		                      <div class="form-group"> <label for="lugar_nombre" class="col-lg-2 control-label">Nombre</label>
		                        <div class="col-lg-10"> <input type="text" class="form-control" id="lugar_nombre" name="lugar_nombre" placeholder="Nombre">
		                        </div>
		                      </div>
		                      <div class="form-group"> <label for="lugar_descripcion" class="col-lg-2 control-label">Descripcion</label>
		                         <div class="col-lg-10"> <input type="text" class="form-control" id="lugar_descripcion" name="lugar_descripcion" placeholder="Descripcion">
		                        </div>
		                      </div>
		                        
		                      
		                      <div class="form-group">
		                        <div class="col-lg-offset-2 col-lg-10">
		                            <input type="submit" class="btn btn-primary btn-lg active" id="registrar" name="registrar" value ="Registrar">
		                            
		                        </div>

		                      </div>
		                    </form>
				    	</div>
				  	</div>
				</div>
		    </div>
		  	</div>
		</div>



      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>