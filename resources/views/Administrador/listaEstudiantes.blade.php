@extends('layouts.masterAdministradores')

@section('content')
<div class="container">
<div class="row">
  <div class="section-title text-center">
  <h1>Lista de Estudiantes</h1>
  </div>           
</div>
</br>
<div class="row">
  <div  class="col-md-6 col-md-offset-3">
<form action="/administradores/listaestudiantes">
    <div class="input-group">
      <input type="text" name="txtBuscar" class="form-control" placeholder="Ingrese el nombre del estudiante a buscar..." >
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" title="Buscar Estudiante"><i class="fa fa-search"></i></button>
      </span>
    </div>
</form>
  </div>
  </br>
  </br>

  <table class="table table-striped">
  <thead>
    <th>NOMBRE COMPLETO</th>
    <th>CEDULA</th>
    <th>EMAIL</th>
    <th>ACCIONES</th>
  </thead>
  <tbody>
    @foreach($usuarios as $item)
    <tr>
     @if($item->IdRolusuario === 3)
      <td>{{$item->name}}</td>
      <td>{{$item->cedula}}</td>
      <td>{{$item->email}}</td>

      <td><a href="/administradores/{{$item->id}}/verlistaArchivosEstudiante" class="fa fa-file" style="font-size:20px" title="Ver Archivo"></a> | <button title="Eliminar Estudiante" style="border: none; background: none;font-size:20px" type="button"  class="fa fa-trash-o" onclick="if(confirm('Deseas eliminar el estudiante {{$item->name}}?')){window.location.href='/administradores/{{$item->id}}/eliminarestudiante'}
                            else{ alert('Operacion Cancelada');}"></button>
</td>
          @endif
          
    </tr>


    @endforeach    
</table>



</div>
 

  
</div>
 

@endsection