@extends('dashboard.master')
@section('content')
<!--<a href="{{ route('category.create') }}" class="btn btn-info btn-sm mb-3">Crear Categoria</a>-->
    <h6>Listar categorías</h6>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categorias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Registro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categoría</th>
                                        <th>Descripción Categoria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td scope="row">{{ $category->id }}</td>
                                            <td>{{ $category->category }}</td>
                                            <td>{{ $category->description_category }}</td>
                                            <td>
                                                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('category.show',$category->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('category.edit',$category->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> 
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
