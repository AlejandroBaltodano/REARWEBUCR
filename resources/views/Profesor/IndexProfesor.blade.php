@extends('layouts.masterProfesores')
@section('content')

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
                    @if($item->IdRolusuario === 3)
                        <td>{{$item->name}}</td>
                        <td>{{$item->cedula}}</td>
                        <td>{{$item->email}}</td>

                        <td><a href="/Profesro/ArchivosEstudiante/{{$item->id}}" class="fa fa-file" style="font-size:20px"></a> </td>
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