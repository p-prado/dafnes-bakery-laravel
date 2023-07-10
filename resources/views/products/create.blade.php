@extends('layout')

@section('title')
    <title>Nuevo Producto</title>
@endsection

@section('imports')
    <link rel="stylesheet" href="{{ asset('resources/css/create.css') }}">
@endsection

@section('content')

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
    
@endsection

@section('footer-imports')
    <script src="{{ asset('resources/js/image_upload.js') }}" defer></script>
    <script src="{{ asset('resources/js/count.js') }}" defer></script>
@endsection