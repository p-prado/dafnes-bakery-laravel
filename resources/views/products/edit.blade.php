<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar | {{ $product->name }}</title>
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
            <form action="/productos" method="post">
                @method('put')
                @csrf
                <h1>Editar Producto</h2>
                <input type="hidden" name="idproduct" value="{{ $product->idproduct }}">
                <div class="input-row">
                    <div class="input-group">
                        <label for="sku">SKU</label>
                        <input type="text" name="sku" placeholder="PC102" value="{{ $product->sku }}">
                    </div>
                    <div class="input-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Pastel de Chocolate" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="input-group">
                    <label for="description">Descripción</label>
                    <textarea type="text" id="textarea" name="description" rows="11" placeholder="Escribe una descripción detallada y llamativa aquí..." oninput="updateCount(250,400)" onload="updateCount(250,400)">{{ $product->description }}</textarea>
                    <p class="length"><span id="count" class="count">0</span> / 400</p>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="idcategory">Categoría</label>
                        <select name="idcategory">
                            <option disabled>Elige una opción</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->idcategory }}"  {{ $category->idcategory == $product->idcategory ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="price">Precio</label>
                        <input type="number" name="price" step="0.01" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="servings_unit">Tipo de Porciones</label>
                        <select name="servings_unit">
                            <option disabled>Elige una opción</option>
                            <option value="porciones" {{ $product->servings_unit == "porciones" ? 'selected' : ''}}>Porciones</option>
                            <option value="unidades" {{ $product->servings_unit == "unidades" ? 'selected' : ''}}>Unidades</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="servings">Porciones</label>
                        <input type="number" step="1" name="servings" value="{{ $product->servings }}">
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="featured">Destacar Producto</label>
                        <select name="featured" id="featured">
                            <option value="0" {{ $product->featured == 0 ? 'selected' : ''}}>No</option>
                            <option value="1" {{ $product->featured == 1 ? 'selected' : ''}}>Sí</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="image">Imagen del Producto</label>
                        <input name="image" type="file" value="{{ $product->image_url }}" disabled>
                    </div>
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