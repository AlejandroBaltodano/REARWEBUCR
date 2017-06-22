@extends('layouts.masterAdministradores')

@section('content')

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Archivos de {{$estudiante->name}}</h3>
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


            @foreach($estudiante->Archivos as $archivo)
            
                    <tr>
                            <td>{{$archivo->NombreDelArchivo}}</td>
                            <td>{{$archivo->Descripcion}}</td>
                            <td>{{$archivo->created_at}}</td>

                        <td><a href="/estudiantes/index/{{$archivo->UrlArchivo}}" class="fa fa-cloud-download" style="font-size:20px"></a>
                                     <button style="font-size:20px; border: none; background: none;color: #337ab7" class="fa fa-trash-o" name="button" type='button' onclick="if(confirm('Deseas eliminar el archivo {{$archivo->NombreDelArchivo}}?')){window.location.href='/administradores/{{$archivo->id}}/archivo'}
                            else{ alert('Operacion Cancelada');}"><i></i></button>
                            </td>

                    </tr>
           

                @endforeach
                </table>
            </div><!-- /.row -->
        </div>

@endsection