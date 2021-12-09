@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category" id="category"
            placeholder="Categoría" value="{{ $category->category }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="description_category" id="description_category" 
        cols="30" rows="10" placeholder="Descripción de Categoria">
            {{ $category->description_category }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection