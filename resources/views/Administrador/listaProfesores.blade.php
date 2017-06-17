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
    <th>ACCIONES</th>
  </thead>
  <tbody>
    @foreach($usuarios as $item)
    <tr>
     @if($item->IdRolusuario === 2)
      <td>{{$item->name}}</td>
      <td>{{$item->cedula}}</td>
      <td>{{$item->email}}</td>

      <td><a href="/administradores/{{$item->id}}/editarprofesores" class="btn btn-warning btn-xs">Editar</a>|<button class="btn btn-danger btn-xs" type="submit" form="form-delete" formaction="/administradores/{{$item->id}}">Eliminar</button>
</td>
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
