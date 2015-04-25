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
    <h1 align="center">Practica4_Bases1</h1> 
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Iniciar sesion para continuar</h1>
                <div class="account-wall">
                    <div align="center">
                        <img  src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="" class="img-circle">
                        <div>
                            </br>
                            <form class="form-signin" action= "admin.php" method="POST">
                                <input type="text" class="form-control" placeholder="Usuario" required autofocus>
                                <input type="password" class="form-control" placeholder="Contraseña" required>
                                
                                <label align="left">Seleccione un usuario</label>
                                <select class="form-control">
                                    <option>------</option>
                                    <option>Administrador</option>
                                    <option>Cliente</option>
                                </select> 
                                
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  >
                                    Iniciar Sesion</button>
                                
                                
                            </form>
                        </div>
                        <a href="admin.php" class="text-center new-account">Registrarse</a>
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