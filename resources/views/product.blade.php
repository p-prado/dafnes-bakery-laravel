@extends('layout')

@section('title')
    <title>{{ $productTitle }} | Dafne's Bakery</title>
@endsection

@section('imports')
    <link rel="stylesheet" href="{{ asset('resources/css/product.css') }}">
@endsection

@section('content')
<!-- SECTION: HEADER -->
@include('partials.header')
    <main>
        <div class="container" id="product-section">
        @php
        $prepositions = ['de', 'con'];
        $formattedTitle = ucwords(str_replace('-', ' ', $productTitle));
        $words = explode(' ', $formattedTitle);

        foreach ($words as $key => $word) {
            if ($key !== 0 && in_array(strtolower($word), $prepositions)) {
                $words[$key] = strtolower($word);
            }
        }

        $formattedTitle = implode(' ', $words);
        @endphp
            <h1 class="product-title">{{ $formattedTitle }}</h1>
            <div class="product-container">
                <div class="product-img-container"><img draggable="false" class="product-img" src="https://jennakateathome.com/wp-content/uploads/2022/02/fresh-fruit-cake-27.jpg" alt="Tartaleta de Frutas"></div>
                <div class="product-info">
                    <p>Nuestra Tartaleta de Fruta es una deliciosa combinación de frutas frescas en una base de masa crocante y suave. Disfruta de sabores naturales y frescos en cada bocado, perfecta para un postre ligero o para compartir con tus seres queridos.</p>
                    <p><span class="product-specs">Porciones:</span> <span id="product-porciones">13</span></p>
                    <p><span class="product-price">Q150</span></p>
                    <a href="" class="button-primary">Comprar</a>
                </div>
            </div>
        </div>
    </main>

@endsection