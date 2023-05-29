<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto Nuevo</title>
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
    <script src="{{ asset('resources/js/image_upload.js') }}" defer></script>
</head>

<body>
<!-- SECTION: HEADER -->
@include('partials.header')


<main>
    <section>
        <div class="container">
            <form action="/productos" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Nuevo Producto</h2>
                <div class="input-row">
                    <div class="input-group">
                        <label for="sku">SKU</label>
                        <input type="text" name="sku" placeholder="PC102" required>
                    </div>
                    <div class="input-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Pastel de Chocolate" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="description">Descripción</label>
                    <textarea type="text" id="textarea" name="description" rows="11" placeholder="Escribe una descripción detallada y llamativa aquí..." oninput="updateCount(250,400)" required></textarea>
                    <p class="length"><span id="count" class="count">0</span> / 400</p>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="category">Categoría</label>
                        <select name="category" required>
                            <option selected>Elige una opción</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->idcategory }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="price">Precio</label>
                        <input type="number" name="price" step="0.01" placeholder="84.00" required>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="servings_unit">Tipo de Porciones</label>
                        <select name="servings_unit" required>
                            <option disabled selected>Elige una opción</option>
                            <option value="porciones">Porciones</option>
                            <option value="unidades">Unidades</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="servings">Porciones</label>
                        <input type="number" name="servings" step="1" placeholder="10" required>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="featured">Destacar Producto</label>
                        <select name="featured" id="featured" required>
                            <option value="0" selected>No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="image">Imagen del Producto</label>
                        <input id="imageInput" name="image" type="file" accept=".jpg, .jpeg, .png, .webp">
                    </div>
                </div>
                <div id="imagePreview" class="image-preview">
                    <p>No files currently selected for upload</p>
                </div>

                <button class="button-primary" type="submit">Crear</button>
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