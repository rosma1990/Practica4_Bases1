<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="icono.png" type="image/png" />
        <title>Inventory Manager</title>

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
                <a class="navbar-brand" href="#">Administracion</a>
            </div>

            <!-- Agrupar los enlaces de navegación, los formularios y cualquier 
            otro elemento que se pueda ocultar al minimizar la barra  -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="agrega_registro.php">Insertar Registros</a></li>
                    <li><a href="agrega_rutas.php">Distribuir Rutas</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Control de Inventario <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Ultimos ingresos</a></li>
                          <li><a href="#">Proximos a comprar</a></li>
                          <li><a href="#">Proximos a caducar</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Proveedores</a></li>
                          <li class="divider"></li>
                          
                        </ul>
                    </li>
                </ul>              
                <p class="navbar-text pull-right">
                    Conectado como <a href="#" class="navbar-link">Nombre Apellidos</a>
                </p>
            </div>
        </nav>
        <div class="row" align="center">
          <div class="col-md-9">
            <form action= "bodega.php" method="POST">
                <button type="button" class="btn btn-success">Bodega</button>
            </form>
            <div class="row">
              <div class="col-md-6">
                <form action= "venta.php" method="POST">
                    <button type="button" class="btn btn-success">Venta</button>
                </form>
              </div>
              <div class="col-md-6">
                <form action= "cambiar.php" method="POST">
                    <button type="button" class="btn btn-success">Cambiar</button>
                </form>
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