<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/create.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('resources/assets/favicon.png') }}">
    <script src="{{ asset('resources/js/nav.js') }}" defer></script>
</head>

<body>
<!-- SECTION: HEADER -->
@include('partials.header')

<main>
    <section>
        <div class="container">
            <form action="/categoria" method="post">
                @method('put')
                @csrf
                <input type="hidden" name="idcategory" value="{{ $category->idcategory }}">
                <h1>Editar Categoría</h2>
                <div class="input-row">
                    <div class="input-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" value="{{ $category->name }}">
                    </div>
                </div>
                <div class="input-group">
                    <label for="description">Descripción</label>
                    <textarea type="text" id="textarea" name="description" rows="4" placeholder="Escribe una descripción corta..." oninput="updateCount(10,50)">{{ $category->description }}</textarea>
                    <p class="length"><span id="count" class="count">0</span> / 50</p>
                </div>
                <button class="button-primary" type="submit">Guardar Cambios</button>
                <button class="button-primary" onclick="window.history.back()">Cancelar</button>
            </form>
        </div>
    </section>
</main>

    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-main')
        @include('partials.footer-copy')
    </footer>
    <script src="{{ asset('resources/js/count.js') }}" defer></script>

</body>

</html>