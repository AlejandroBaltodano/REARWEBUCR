@extends('layouts.masterEstudiantes')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Subir Archivo</div>
                <div class="panel-body">

					<form enctype='multipart/form-data' role="form" METHOD="post" action="{{url('/estudiantes/guardarArchivo')}}" >
						{{csrf_field()}}
						<div class="form-group">
							<label for="NombreDelArchivo">Nombre del archivo

								<input class="form-control" name="NombreDelArchivo">
							</label>
						</div>
						<div class="form-group">

						  <label for="ubicacionArchivo">Seleccione archivo</label>
					    <input type="file" class="form-control" name="ubicacionArchivo">
					  </div>

						<div class="form-group">
					    <label for="Descripcion">Descripcion</label>
					    <textarea class="form-control" name="Descripcion" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Subir</button>

					</form>

                </div>
            </div>
        </div>
    </div>
</div>