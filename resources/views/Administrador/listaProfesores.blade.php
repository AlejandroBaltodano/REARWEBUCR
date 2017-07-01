@extends('layouts.masterAdministradores')
@section('content')
   <div class="page-header ">
  <h1>Lista de Profesores</h1>
</div>
</br>
<div  class="col-md-6 col-md-offset-3">
<form action="/administradores/listaprofesores">
  
    <div class="input-group">
      <input type="text" name="txtBuscar" class="form-control" placeholder="Ingrese el nombre del profesor a buscar..." >
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" title="Buscar Profesor"><i class="fa fa-search"></i></button>
      </span>
    </div>
</form>
 </div>
</br>
</br>
<div>
<button onclick="window.location.href='/administradores/create'" style="border: none; background: none"><i class="fa fa-plus" style="font-size:25px"></i></button>
</div>
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
     @if($item->IdRolusuario === 2)
      <td>{{$item->name}}</td>
      <td>{{$item->cedula}}</td>
      <td>{{$item->email}}</td>

      <td><a href="/administradores/{{$item->id}}/editarprofesores"  class="fa fa-pencil" style="font-size:20px" title="Editar Profesor"></a> | <button title="Eliminar Profesor" style="border: none; background: none;font-size:20px" type="button" class="fa fa-trash-o" onclick="if(confirm('Deseas eliminar el profesor {{$item->name}}?')){window.location.href='/administradores/{{$item->id}}/profesor'}
                            else{ alert('Operacion Cancelada');}"></button>
</td>

          @endif
          
    </tr>


    @endforeach    
</table>

</div>


@endsection
