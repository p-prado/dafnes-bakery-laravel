<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} | Dafne's Bakery</title>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('resources/assets/favicon.png') }}">
    <script src="{{ asset('resources/js/nav.js') }}" defer></script>
</head>

<body>
<!-- SECTION: HEADER -->
@include('partials.header')
    <main>
        <div class="container" id="product-section">
            <h1 class="product-title">{{ $product->name }}</h1>
            <div class="product-container">
                <div class="product-img-container"><img class="product-img" src="{{ $product->image_url }}" alt="{{ $product->name }}"></div>
                <div class="product-info">
                    <p>{{$product->description}}</p>
                    <p><span class="product-servings-unit">{{ $product->servings_unit }}:</span> <span id="product-servings">{{ $product->servings }}</span></p>
                    <p><span class="product-price">Q{{ $product->price }}</span></p>
                    <a href="#" class="button-primary">Comprar</a>
                </div>
            </div>
        </div>
    </main>
    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-main')
        @include('partials.footer-copy')
    </footer>
</body>

</html>