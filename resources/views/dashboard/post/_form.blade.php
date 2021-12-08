@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" 
    placeholder="Publicacion" value="{{old("publication", $post-> publication) }}">
</div>
<div class="form-group">
    <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opcion</option>
        @foreach($categories as $category => $id)
        <option {{ $post ->category_id == $id ? 'selected="selected"':''}} value="{{ $id }}">
            {{ $category }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="state" id="state">
        <option value="">Publicado</option>
        <option value="">No Publicado</option>
        <option value="">En Revision</option>
    </select>
</div>

<div class="form-group">
    <textarea class="form-control" name="publication_content" id="publication_content" cols="30" rows="10"
    placeholder="Contenido Publicación">
        {{old("publication_content", $post-> publication_content) }}
    </textarea>
    
</div>
<button type="submit" class="btn btn-success btn-sm">Guardar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
    