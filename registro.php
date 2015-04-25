<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica 4</title>
    <link rel="shortcut icon" href="icono.png" type="image/png" />
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

    <h1 align="center">Formulario de Registro</h1> 
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <form class="form-horizontal" action= "regis.php" role="form" method="POST">
                      <div class="form-group"> <label for="usr_nombre" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10"> <input type="text" class="form-control" id="usr_nombre" name="usr_nombre" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="form-group"> <label for="usr_apellido" class="col-lg-2 control-label">Apellido</label>
                         <div class="col-lg-10"> <input type="text" class="form-control" id="usr_apellido" name="usr_apellido" placeholder="Apellido">
                        </div>
                      </div>
                        <div class="form-group"> <label for="usr_nit" class="col-lg-2 control-label">Nit</label>
                          <div class="col-lg-10"> <input type="text" class="form-control" id="usr_nit" name="usr_nit" placeholder="Nit">
                        </div>
                      </div>
                        <div class="form-group"> <label for="usr_telefono" class="col-lg-2 control-label">Telefono</label>
                         <div class="col-lg-10"> <input type="text" class="form-control" id="usr_telefono" name="usr_telefono" placeholder="Telefono">
                        </div>
                      </div>
                        <div class="form-group"> <label for="usr" class="col-lg-2 control-label">Usuario</label>
                         <div class="col-lg-10"> <input type="text" class="form-control" id="usr" name="usr" placeholder="Usuario">
                        </div>
                      </div>
                        <div class="form-group"> <label for="ejemplo_password_3" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10"> <input type="password" class="form-control" id="usr_pass" name="usr_pass" placeholder="Contaseña">
                        </div>
                      </div>
                        <div class="form-group"> <label for="ejemplo_password_3" class="col-lg-2 control-label">Password Conf</label>
                        <div class="col-lg-10"> <input type="password" class="form-control" id="usr_pass2" name="usr_pass2" placeholder="Contaseña">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" class="btn btn-primary btn-lg active" id="registrar" name="registrar" value ="Registrar">
                            
                        </div>

                      </div>
                    </form>
                    <a id ="Regvuelta" href="index.php">Volver</a>
                </div>
            </div>     
        </div>
            <script>
                function cambiar()
                {
                        window.redirect("pagina1.php");
                }
            </script>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>