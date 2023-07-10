@extends('dashboard.layout')

@section('title')
    <title>Dashboard | Categorías</title>
@endsection

@section('content')
    <!-- SECTION: HEADER -->
    @include('partials.header')
    @include('dashboard.menu')
    <div class="container">
        <h1>Categorías</h1>
        <a class="button-primary" href="/categoria/create" >Crear Nueva</a>
        <table>
            <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th class="description">Descripción</th>
                    <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="id">{{ $category->idcategory }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="actions">
                            <a href="/categoria/{{ $category->idcategory }}/edit" class="action-icon" title="Editar"><i class="fa-regular fa-pen-to-square"></i></a> |
                            <button class="trashButton" title="Eliminar" type="button" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $category->idcategory }}"><i class="fa-regular fa-trash-can action-icon"></i></button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Modal -->
    @foreach ($categories as $category)
        <div class="modal fade" id="modal-delete-{{ $category->idcategory }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-2" id="modal{{$category->idcategory}}Label">Eliminar Categoría</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Realmente quieres eliminar la categoría <b>{{ $category->name }}</b>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form id="trashForm" action="/categoria/{{ $category->idcategory }}" method="post">
                            @method('delete')
                            @csrf
                            <input type="hidden" value="{{ $category->idcategory }}">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    @endforeach

@endsection