@extends('layouts.masterProfesores')
@section('content')
    <div class="row">
        <div class="section-title text-center">
            <h1>Lista de Estudiantes</h1>
        </div>
    </div>
    <div>
        <div style="display: inline-block; width: 100%">
        <form action="/Profesor/index" class="pull-right" style="width: 50%">
            <div  class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <input value="{{$txtBuscarValor}}" type="text" name="txtBuscar" class="form-control" placeholder="Ingrese para buscar..." style="width: 250px; display: block">
                    <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
                </div>
            </div>
        </form>
            </div>
        <table class="table table-striped">
            <thead>
            <th>NOMBRE COMPLETO</th>
            <th>CEDULA</th>
            <th>EMAIL</th>
            <th></th>
            </thead>
            <tbody>
            @foreach($usuarios as $item)
                <tr>
                    @if($item->IdRolusuario === 3)
                        <td>{{$item->name}}</td>
                        <td>{{$item->cedula}}</td>
                        <td>{{$item->email}}</td>

                        <td><a title="Ver archivos" href="/Profesor/ArchivosEstudiante/{{$item->id}}" class="fa fa-file" style="font-size:20px"></a> </td>
                    @endif

                </tr>


            @endforeach
        </table>

    </div>

    <form id="form-delete" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE"></input>
    </form>
@endsection