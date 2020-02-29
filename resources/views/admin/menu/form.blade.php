<div class="form-group">
    <label for="nombre" class="col-lg-2 control-label requerido">Nombre</label>
        <div class="col-sm-8">
            <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}" class="form-control">
        </div>
</div>

<div class="form-group">
    <label for="url" class="col-lg-2 control-label requerido">Url</label>
        <div class="col-sm-8">
            <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" required>
        </div>
</div>

<div class="form-group">
    <label for="icono" class="col-lg-2 control-label">Icono</label>
        <div class="col-sm-8">
            <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}">
        </div>
</div>