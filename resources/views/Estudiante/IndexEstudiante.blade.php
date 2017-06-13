@extends('layouts.masterEstudiantes')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu Estudiante</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/script.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Archivos subido</h3>
                    <p>Archivos subidos hasta hoy
                        <script type="text/javascript"> var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); </script></p>

                </div>
            </div>

            <button onclick="window.location.href='Archivos/subirArchivo'">Subir Archivos</button>

            <div class="row">
                @foreach($UserEstudiante->Archivos as $archivo)


                        <div class="col-md-4">
                        <div class="portfolio-item">
                            <p style="color: black; font-size:36px "><i class="fa fa-file-word-o" style="font-size:36px"> {{$archivo->NombreDelArchivo}}</i>
                            <div class="portfolio-details text-center">
                                <h4>  {{$archivo->Descripcion}}
                                    <br><a href="/{{$archivo->UrlArchivo}}" data-title="Ir al Archivo"><i class="fa fa-external-link"></i></a>
                                </h4></div>
                        </div>
                    </div>
                     @endforeach




            </div><!-- /.row -->
        </div>

</html>