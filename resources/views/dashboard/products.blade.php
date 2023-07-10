@extends('dashboard.layout')

@section('title')
    <title>Dashboard | Productos</title>
@endsection

@section('content')
    @include('partials.header')
    @include('dashboard.menu')
    <main>
        <div class="container">
            <h1>Productos</h1>
            <a class="button-primary" href="/productos/create" >Crear Nuevo</a>
            <table>
                <thead>
                        <th>SKU</th>
                        <th>Nombre</th>
                        <th class="description">Descripción</th>
                        <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="id">{{ $product->sku }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td class="actions">
                                <a href="/productos/{{ $product->idproduct }}/edit" class="action-icon" title="Editar"><i class="fa-regular fa-pen-to-square"></i></a> |
                                <button class="trashButton" title="Eliminar" type="button" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $product->idproduct }}"><i class="fa-regular fa-trash-can action-icon"></i></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    @foreach ($products as $product)
        <div class="modal fade" id="modal-delete-{{ $product->idproduct }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-2" id="modal{{$product->idproduct}}Label">Eliminar Producto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Realmente quieres eliminar el producto <b>{{ $product->name }}</b>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form id="trashForm" action="/productos/{{ $product->idproduct }}" method="post">
                            @method('delete')
                            @csrf
                            <input type="hidden" value="{{ $product->idproduct }}">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection