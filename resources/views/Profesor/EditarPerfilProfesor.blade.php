@extends('layouts.masterProfesores')
<script language="javaScript">

    $(document).ready(function () {

            //Clear the texbox value
        $("input[type='password']").val('');
    });


</script>

@section('content')
    @include('partials.errores')
    <div class="container" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Profesor</div>
                    <div class="panel-body">

                        <p>Datos del Profesor</p>

                        <form   class="form-horizontal" role="form" method="POST" action="/administradores/{{$profesor->id}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT"></input>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label  for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-7">

                                    <input id="name" type="text" class="form-control" name="name" value="{{$profesor->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                                <label for="cedula" class="col-md-4 control-label">Cedula</label>

                                <div class="col-md-7">
                                    <input id="cedula" type="text" class="form-control" name="cedula" value="{{ $profesor->cedula }}" required>

                                    @if ($errors->has('cedula'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $profesor->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('passwordActual') ? ' has-error' : '' }}">
                                <label for="passwordActual" class="col-md-4 control-label">Contraseña Actual</label>

                                <div class="col-md-6">

                                    <input id="passwordActual" type="password" class="form-control" name="passwordActual"  required  >

                                    @if ($errors->has('passwordActual'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('passwordActual') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Nueva Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar Nueva Contraseña
                                </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <input id="IdRolusuario" type="hidden" class="form-control" name="IdRolusuario" value="2">
                            <input id="carnetEstudiante" type="hidden" class="form-control" name="carnetEstudiante" value="null">


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
