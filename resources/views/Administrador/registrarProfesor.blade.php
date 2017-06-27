@extends('layouts.masterAdministradores')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Profesores</div>
                <div class="panel-body">


<p>Introduzca los siguientes datos</p>


<form  role="form" method="POST" action="/administradores">
{{ csrf_field() }}


<!--Original
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>



                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>




                                                    <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">Cedula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" required>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

-->

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <div class="form-group has-success">
                <input id="name" type="text" class="form-control" name="name" placeholder="Nombre Completo" value="{{ old('name') }}" required>
            </div>
    </div>
        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
</div>

<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <div class="form-group has-success">
            <input id="cedula" type="text" class="form-control" name="cedula" placeholder="Cedula" value="{{ old('cedula') }}" required>
        </div>
    </div>
        @if ($errors->has('cedula'))
        <span class="help-block">
            <strong>{{ $errors->first('cedula') }}</strong>
        </span>
        @endif
</div>


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
        <div class="form-group has-success">
            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" required>
        </div>
    </div>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <div class="form-group has-success">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" value="{{ old('password') }}" required>
        </div>
    </div>
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <div class="form-group has-success">
                <input id="password-confirm" type="password" class="form-control" name="password-confirm" placeholder="Confirme la contraseña" value="{{ old('password-confirm') }}" required>
            </div>
    </div>
    @if ($errors->has('password-confirm'))
        <span class="help-block">
            <strong>{{ $errors->first('password-confirm') }}</strong>
        </span>
    @endif
</div>



                        
                                <input id="IdRolusuario" type="hidden" class="form-control" name="IdRolusuario" value="2">
                                <input id="carnetEstudiante" type="hidden" class="form-control" name="carnetEstudiante" value="null">


                           
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
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
