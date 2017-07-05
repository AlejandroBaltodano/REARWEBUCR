@extends('layouts.masterEstudiantes')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Archivo</div>
                <div class="panel-body">

                        <form enctype='multipart/form-data' role="form" METHOD="post" action="{{url("/estudiante/Archivo/actualizar/$archivo->id")}}" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="NombreDelArchivo">Nombre del archivo

                                <input name="NombreDelArchivo" value="{{explode('.',$archivo->NombreDelArchivo)[0]}}" ><small style="color: red; size: 10px">  *</small>
                            </label>
                        </div>
                            <div class="form-group">

                            <label for="ArchivoEditar">Usted esta editando :
                                <a href="/estudiantes/index/{{$archivo->UrlArchivo}}" >{{$archivo->NombreDelArchivo}}</a>
                                &nbsp &nbsp &nbsp<a onclick="document.getElementById('EditarSubir').style='block'" type="button" title="Sustituir Archivo"><i class="fa fa-exchange"></i></a>
                            </label>
                </div>

                <div class="form-group" style="display: none" id="EditarSubir">

                            <label for="ubicacionArchivo">Seleccione archivo</label>
                            <input type="file" class="form-control" name="ubicacionArchivo" style="border: none;">
                        </div>

                        <div class="form-group">
                            <label for="Descripcion">Descripción  </label> <small style="color: red; size: 12px">  * </small>
                            <textarea class="form-control" name="Descripcion" rows="3" >{{$archivo->Descripcion}}</textarea>
                        </div>
                           <div>
                           <p> <small>Los campos marcados con <span style="color: red; size: 12px" >*</span> son opcionales</small></p>
                           </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
