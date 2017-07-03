@extends('layouts.masterEstudiantes')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Subir Archivo</div>
                <div class="panel-body">

					<form enctype='multipart/form-data' role="form" METHOD="post" action="{{url('/estudiantes/guardarArchivo')}}" id="Formulario" >
						{{csrf_field()}}
						<div class="form-group">
							<label for="NombreDelArchivo">Nombre del archivo

								<input name="NombreDelArchivo">
							</label>
						</div>
						<div class="form-group">

						  <label for="ubicacionArchivo">Seleccione archivo</label>
					    <input type="file" class="form-control" name="ubicacionArchivo" style="border: none;" required>
					  </div>

						<div class="form-group">
					    <label for="Descripcion">Descripcion</label>
					    <textarea class="form-control" name="Descripcion" rows="3"></textarea>
					  </div>

						<script type="text/javascript">
									function Reemplazar () {
										@foreach($User->Archivos as $archivo)

                                        if(document.Formulario.NombreDelArchivo){
                                            if(confirm('Ya existe un archivo con este nombre eseas Reemplazar el archivo {{$archivo->NombreDelArchivo}}?')){document.Formulario.submit()}
                                            else{ alert('Operacion Cancelada');}}
										@endforeach
                                    }

						</script>

						<button type="submit" class="btn btn-primary">Subir</button>

					</form>

                </div>
            </div>
        </div>
    </div>
</div>