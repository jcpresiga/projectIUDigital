@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group mb-3">
    <input placeholder="Nombre categoria" class="form-control" type="text" name="category" id="category"
    value="{{old('category', $category -> category)}}">
</div>
<div class="form-group mb-3">
    <textarea placeholder="Descripción de la categoria" class="form-control" name="description_category" id="description_category" cols="30" rows="10">
        {{old('description_category', $category -> description_category)}}
    </textarea>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
</div>
