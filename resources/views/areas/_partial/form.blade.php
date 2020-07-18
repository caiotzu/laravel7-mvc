@csrf
<div class="form-group">
    <label >Descrição</label>
    <input type="text" name="description" class="form-control" placeholder="Entre com uma descrição" value="{{ isset($area) ? $area->description : '' }}">
</div>
<div class="form-group">
    <label>Cor</label>
    <input type="color" name="color" class="form-control" placeholder="Entre com uma cor" value="{{ isset($area) ? $area->color : '' }}">
</div>
<button type="submit" class="btn btn-primary">Salvar</button>