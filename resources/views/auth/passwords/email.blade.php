@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Recupera tu cuenta</h3>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


<p>Introduce el correo electrónico para restablecer tu cuenta</p>



                    <form  role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

<!--

class="form-horizontal"


-->
<!--
        <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        <input id="Correo" type="mail" class="form-control" name="Correo" placeholder="Correo Electrónico">
                                    </div>
                                        </br>
-->


      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

      <div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>

                                <div class="form-group has-success">
                                  

                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico"value="{{ old('email') }}" required>
</div>
</div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        






<!--

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
                        </div> <span class="glyphicon glyphicon-send"></span>

-->                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default btn-lg">
                                    Enviar link al correo <i class="fa fa-paper-plane" aria-hidden="true"></i>
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
