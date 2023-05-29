<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$category->name}} | Dafne's Bakery</title>
    <link rel="icon" type="image/x-icon" href="public/resources/assets/favicon.png">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/category.css') }}">
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- SECTION: HERO -->
    <div id="hero-section" class="hero">
        <div class="container">
           @include('partials.transparent-header')
            <div class="hero-content">
                <h1 class="hero-title">{{$category->name}}</h1>
            </div>
        </div>
    </div>


    <!-- SECTION: PRODUCTS -->
    <div id="productos">

        <div class="container">
            <div class="breadcrumbs">
                <p><a href="">Productos</a> > <a href="">{{$category->name}}</a></p>
            </div>
            <div class="product-card-container">

                @foreach($category->products as $product)
                    <a class="product-card-link" href="/productos/{{ $product->idproduct }}">
                        <div class="product-card">
                            <div class="card-img-container">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                    class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $product->name }}</h3>
                                <p class="price">Q{{ $product->price }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>

    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-main')
        @include('partials.footer-copy')
    </footer>

</body>

</html>