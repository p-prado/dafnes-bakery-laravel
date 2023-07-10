@extends('layout')

@section('title')
    <title>{{$category->name}} | Dafne's Bakery</title>
@endsection

@section('imports')
    <link rel="stylesheet" href="{{ asset('resources/css/category.css') }}">
@endsection

@section('content')

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
@endsection