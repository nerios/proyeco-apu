<form class="form-horizontal" role"form" method="POST" action="{{ url('noticias') }}">
 <!-- Agregar un token para que sea aceptado por laravel-->
 {{ csrf_field() }}
  <div class="form-group">
   <label for="titulo" class="col-sm-2 control-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
    </div>
  </div>

  <div class="form-group">
    <label for="descripcion"class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
       <textarea type="text" class="form-control" id="descripcion" placeholder="Descripcion" name="descripcion"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="urlImg" class="control-label col-sm-2">Imagen</label>
    <div class="col-sm-10">
       <input type="file" id="urlImg" class="form-control">
    </div>
  </div>
   
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
   </div>
</form>