<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías | Dashboard</title>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- ATTEMPT TO IMPORT FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b4e0939b37.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('resources/assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    </head>
<body>
<!-- SECTION: HEADER -->
@include('partials.header');
@include('dashboard.menu');
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
                            <td class="actions"><a href=""><i class="fa-regular fa-pen-to-square"></i></a> | <a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>

    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-copy')
    </footer>
</body>
</html>