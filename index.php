<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AdicTechPeru Sistema v.1.0</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="saphv2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="loginbg">
     <!-- login -->
<div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
          <div class="account-wall">
                <img class="profile-img" src="images/adictech-logo.png"
                    alt="">
                <form class="form-signin" action="validar_usuario.php" method="post">
                <input name="admin" required="required" type="text" class="form-control" placeholder="usuario">
                <input name="password_usuario" required type="password" class="form-control" placeholder="contraseña"  required>
                <input name="iniciar" type="submit" value="Iniciar Sesión" class="btn btn-lg btn-info btn-block">
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Recuérdame
                </label>
                <a href="#" class="pull-right need-help">Necesitas ayuda? </a><span class="clearfix"></span>
                </form>
          
            </div>
      </div>
    </div>
   
<!-- login -->

    
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/saphv2.js"></script>
  </body>
</html>