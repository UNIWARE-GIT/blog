@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categorias:</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Administra Todo Aqui
        </div>
        <div class="card-body">
            <table class="table table-light">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary">Editar</a>
                            </td>
                            <td width="10px">
                                <form method="POST" action="{{ route('admin.categories.destroy', $category) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
