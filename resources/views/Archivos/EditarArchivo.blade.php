@extends('layouts.masterEstudiantes')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Subir Archivo</div>
                <div class="panel-body">

                        <form enctype='multipart/form-data' role="form" METHOD="post" action="{{url("/estudiante/Archivo/actualizar/$archivo->id")}}" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="NombreDelArchivo">Nombre del archivo

                                <input name="NombreDelArchivo" value="{{explode('.',$archivo->NombreDelArchivo)[0]}}">
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
                            <label for="Descripcion">Descripcion</label>
                            <textarea class="form-control" name="Descripcion" rows="3" >{{$archivo->Descripcion}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Subir</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
