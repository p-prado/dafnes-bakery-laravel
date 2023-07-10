@extends('layout')

@section('title')
    <title>{{ $product->name }} | Dafne's Bakery</title>
@endsection

@section('imports')
    <link rel="stylesheet" href="{{ asset('resources/css/product.css') }}">
@endsection

@section('content')

    @include('partials.header')
    <div class="container" id="product-section">
        <h1 class="product-title">{{ $product->name }}</h1>
        <div class="product-container">
            <div class="product-img-container"><img class="product-img" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"></div>
            <div class="product-info">
                <p>{{$product->description}}</p>
                <p><span class="product-servings-unit">{{ $product->servings_unit }}:</span> <span id="product-servings">{{ $product->servings }}</span></p>
                <p><span class="product-price">Q{{ $product->price }}</span></p>
                <a href="#" class="button-primary">Comprar</a>
            </div>
        </div>
    </div>

@endsection