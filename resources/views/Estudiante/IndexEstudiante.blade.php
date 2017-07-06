@extends('layouts.masterEstudiantes')

@section('content')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu Estudiante</title>
   </head>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Archivos</h3>
                    <p>Archivos subidos hasta hoy
                        <script type="text/javascript"> var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); </script></p>

                </div>
            </div>
            <div style="display: inline-block; width: 100%">
                <form action="/estudiantes/index" class="center-block" style="width: 100%">
                <div  class="col-md-6 col-md-offset-3">
                    <div class="input-group" >
                        <input value="{{$txtBuscarValor}}" type="text" name="txtBuscar" class="form-control pull-right" placeholder="Ingrese para buscar..." >
                        <span class="input-group-btn" >
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
                    </div>
                </div>
            </form>

            </div>
            <button title="Subir un archivo Nuevo" onclick="window.location.href='/estudiantes/Archivos/subirArchivo'" style=" color:#337ab7 ;border: none; background: none"><i class="fa fa-plus" style="font-size:25px; display: block"></i></button>

            <div class="row">
                <table class="table table-striped">
                <thead>
                <th>Nombre del archivo</th>
                <th>Descripción</th>
                <th>Subido el</th>
                <th></th>
                </thead>


            @foreach($Archivos as $archivo)
                    <tr>
                            <td>{{$archivo->NombreDelArchivo}}</td>
                            <td>{{$archivo->Descripcion}}</td>
                            <td>{{$archivo->created_at}}</td>

                        <td><a href="/estudiantes/index/{{$archivo->UrlArchivo}}" class="fa fa-cloud-download" style="font-size:20px" title="Descargar Archivo"></a>
                                     <a style="font-size:20px" class="fa fa-pencil-square-o" href="/estudiante/Archivo/editar/{{$archivo->id}}" title="Editar Archivo"></a>
                                     <button style="font-size:20px; border: none; background: none;color: #337ab7" class="fa fa-trash-o" name="button" title="Eliminar Archivo" type='button' onclick="if(confirm('Deseas eliminar el archivo {{$archivo->NombreDelArchivo}}?')){window.location.href='/estudiantes/Archivos/eliminar/{{$archivo->id}}'}
                            else{ alert('Operacion Cancelada');}"><i></i></button>
                            </td>

                    </tr>

                @endforeach
                </table>
            </div><!-- /.row -->
        </div>
@endsection