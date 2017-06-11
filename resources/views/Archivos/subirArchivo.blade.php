<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Subir Archivo</div>
                <div class="panel-body">

					<form>
					  <div class="form-group">
					    <label for="titulo">Titulo</label>
					    <input type="text" class="form-control" name="titulo" placeholder="titulo">
					  </div>

					  <div class="form-group">
					    <label for="descripcion">descripcion</label>
					    <textarea class="form-control" name="descripcion" rows="3"></textarea>
					  </div>

					  <div class="form-group">
					    <label for="ubicacionArchivo">File input</label>
					    <input type="file" class="form-control-file" name="ubicacionArchivo" aria-describedby="fileHelp">
					    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>