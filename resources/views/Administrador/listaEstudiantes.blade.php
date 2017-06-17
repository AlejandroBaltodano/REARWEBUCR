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

      <td><a href="" class="btn btn-success btn-xs">Ver Archivos</a>|<a href="" class="btn btn-warning btn-xs">Editar</a>|<a href="" class="btn btn-danger btn-xs">Eliminar</a>
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