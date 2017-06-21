@extends("layouts.masterEstudiantes")
@section('content')

    <div class="title m-b-md">
        Editando archivo {{$archivo->NombreDelArchivo}}
    </div>
    <form action="/estudiante/Archivo/actualizar/{{$archivo->id}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <p><input type="text" name="nombre" placeholder="Ingrese Nombre..." value="{{$archivo->NombreDelArchivo}}"></p>
        <p><textarea  name="Descripcion" placeholder="Ingrese Descripcion...">{{$archivo->Descripcion}}</textarea></p>
        <p><input type="submit" value="Guardar"></p>
    </form>
@endsection