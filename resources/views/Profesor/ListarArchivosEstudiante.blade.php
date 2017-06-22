@extends('layouts.masterProfesores')

@section('content')
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ArchivosDelEstudiante</title>
    </head>
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Archivos del estudiante {{$UserEstudiante->name}}</h3>
                <p>Archivos subidos hasta hoy
                    <script type="text/javascript"> var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); </script></p>

            </div>
        </div>


        <div class="row">
            <table class="table table-striped">
                <thead>
                <th>Nombre del archivo</th>
                <th>Descripción</th>
                <th>Subido el</th>
                <th></th>
                </thead>


                @foreach($UserEstudiante->Archivos as $archivo)
                    <tr>
                        <td>{{$archivo->NombreDelArchivo}}</td>
                        <td>{{$archivo->Descripcion}}</td>
                        <td>{{$archivo->created_at}}</td>

                        <td><a href="/estudiantes/index/{{$archivo->UrlArchivo}}" class="fa fa-cloud-download" style="font-size:20px"></a>
                        </td>

                    </tr>

                @endforeach
            </table>
        </div><!-- /.row -->
    </div>
@endsection