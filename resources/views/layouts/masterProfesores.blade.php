
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.png">

    <title>Menu Principal Profesores</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
  
  body{

    margin-top: 100px;
  }
</style>
  </head>

  <body>
  <a href=""></a>

    <nav class="navbar navbar-inverse navbar-fixed-top " style="background-color: #e3f2fd;" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
          <a class="navbar-brand" href="/">REARWEBUCR- Profesor</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <!--izquierda-->
          <ul class="nav navbar-nav">
            <li ><a class="navbar-brand" href="/">Lista de estudiantes</a></li>
             </ul>
          <!--derecha-->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>
          {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            
            <ul class="dropdown-menu" role="menu">
            <li>
          <a href="/Profesor/Perfil">Editar Perfil</a>
            </li>
            <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Cerrar Sesion <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
           </li>
            </ul>
           </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    

    <div class="container">
    @yield('content')

    <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <div>&copy; 2017- Todos los derechos reservados. Carlos Alejandro Reyes Baltodano</div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
      </form>


    <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../Styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Styles/css/font-awesome.min.css" rel="stylesheet">
  <link href="../Styles/css/animate.css" rel="stylesheet">
  <link href="../Styles/css/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <script src="../Styles/js/jquery-2.1.1.min.js"></script>
  <script src="../Styles/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Styles/js/jquery.appear.js"></script>
  <script src="../Styles/js/contact_me.js"></script>
  <script src="../Styles/js/jqBootstrapValidation.js"></script>
  <script src="../Styles/js/modernizr.custom.js"></script>
  <script src="../Styles/js/script.js"></script>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->


  </body>
</html>
