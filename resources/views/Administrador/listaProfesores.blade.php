@extends('layouts.masterAdministradores')
@section('content')

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

      <td><a href="/administradores/{{$item->id}}/editarprofesores"  class="fa fa-pencil" style="font-size:20px"></a> | <button style="border: none; background: none;font-size:20px" type="submit" form="form-delete" formaction="/administradores/{{$item->id}}" class="fa fa-trash-o"></button>
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
