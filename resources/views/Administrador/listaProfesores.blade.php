@extends('layouts.masterAdministradores')



@section('content')


<div>
  <a class="btn btn-primary" href="/administradores/create">Nuevo Profesor</a>
</div>
</br>
<div>
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
     @if($item->IdRolusuario === 2)
      <td>{{$item->name}}</td>
      <td>{{$item->cedula}}</td>
      <td>{{$item->email}}</td>

      <td><a href="">Editar</a> |
          <a href="">Eliminar</a>
</td>
          @endif
          
    </tr>


    @endforeach    
</table>

</div>


@endsection