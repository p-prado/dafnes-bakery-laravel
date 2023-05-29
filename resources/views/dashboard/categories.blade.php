<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Categorías</title>
    <!--  IMPORT BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- ATTEMPT TO IMPORT FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b4e0939b37.js" crossorigin="anonymous"></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{ asset('resources/assets/favicon.png') }}">
    <!-- IMPORT STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    </head>
<body>
<!-- SECTION: HEADER -->
@include('partials.header')
@include('dashboard.menu')
    <main>
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
    </main>

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

    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-copy')
    </footer>
</body>
</html>