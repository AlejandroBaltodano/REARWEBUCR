@extends('layouts.masterAdministradores')

@section('content')

<div>
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

      <td><a href="/administradores/{{$item->id}}/verlistaArchivosEstudiante" class="fa fa-file" style="font-size:20px"></a> | <button style="border: none; background: none;font-size:20px" type="button"  class="fa fa-trash-o" 
      onclick="if(confirm('Deseas eliminar el estudiante {{$item->name}}?')){window.location.href='/administradores/{{$item->id}}/eliminarestudiante'}
                            else{ alert('Operacion Cancelada');}"></button>
</td>
          @endif
          
    </tr>


    @endforeach    
</table>

</div>

@endsection