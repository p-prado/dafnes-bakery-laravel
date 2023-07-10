@extends('layout')


@section('title')

<title>Dafne's Bakery</title>

@endsection


@section('content')

<!-- SECTION: HERO -->
<section id="hero-section" class="hero">
    <div class="container">
        @include('partials.transparent-header')
        <!-- HERO -->
        <div class="hero-content">
            <h1 class="hero-title">Dafne's Bakery</h1>
            <h3 class="hero-subtitle">¡Repostería de Calidad!</h3>
            <a href="#featured-section" class="button-primary hero-cta">Ver Pasteles</a>
        </div>
    </div>
</section>
<!-- SECTION: PRODUCTOS DESTACADOS -->
<div class="featured-section">
    <div class="container">
        <h2 class="section-heading">Productos Destacados</h2>
        <div class="slider-container">
            <div class="slider-track">
                @foreach($products as $product)
                <div class="card">
                    <div class="card-img-container">
                        <img src="{{ asset($product->image_url) }}"
                            alt="Tartaleta de Frutas" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $product->name }}</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                            molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                        <a href="/productos/{{$product->idproduct}}" class="button-primary card-cta">Comprar</a>
                    </div>
                </div>
                @endforeach

            </div>
            <button class="slider-button slider-button--left">&#8249;</button>
            <button class="slider-button slider-button--right">&#8250;</button>
        </div>
    </div>
</div>
<!-- SECTION: DE TEMPORADA (SEASONAL) -->
<div class="seasonal-section" id="seasonal-section">
    <div class="seasonal-heading-line">
        <div class="seasonal-heading-circle">
            <h2 class="section-heading">De Temporada</h2>
        </div>
    </div>
    <div id="seasonal-slider" class="slider">

        <div class="slider-content slider-content-active" data-slider-content-id="1">
            <img class="slider-img" src="resources/assets/Cake_Decoration_2000x1000.webp" alt="Cake Decoration">
            <div class="slider-description">
                <img src="resources/assets/dafnes_bakery_primary_faded.webp" alt="Dafne's Bakery Logo">
                <h3 class="slider-content-title">Pastel de Fruta</h3>
            </div>
        </div>

        <div class="slider-content" data-slider-content-id="2">
            <img class="slider-img" src="https://cdn.pickuplimes.com/cache/33/c4/33c4050a535852ffec9fcab399718cc9.jpg" alt="Cake Decoration">
            <div class="slider-description">
                <img src="resources/assets/dafnes_bakery_primary_faded.webp" alt="Dafne's Bakery Logo">
                <h3 class="slider-content-title">Pastel de Chocolate</h3>
            </div>
        </div>

        <div class="slider-content" data-slider-content-id="3">
            <img class="slider-img" src="https://images-gmi-pmc.edge-generalmills.com/165f3d2f-0610-40a6-abf8-478fb850be7c.jpg" alt="Cake Decoration">
            <div class="slider-description">
                <img src="resources/assets/dafnes_bakery_primary_faded.webp" alt="Dafne's Bakery Logo">
                <h3 class="slider-content-title">Pumpkin Pie</h3>
            </div>
        </div>

        <div class="slider-controls">
            <div class="slider-btn slider-btn-active" data-linked-slider-content="1"></div>
            <div class="slider-btn" data-linked-slider-content="2"></div>
            <div class="slider-btn" data-linked-slider-content="3"></div>
        </div>
    </div>
</div>
<div class="seasonal-heading-line"></div>

<!-- SECTION: TESTIMONIALS -->
<div class="testimonials-section">
    <div class="container">
        <h2 class="section-heading">¿Qué dicen nuestros clientes?</h2>
        <div class="slider-testimonials">
            <div class="testimonial-content">
                    <img class="testimonial-img" src="https://www.w3schools.com/howto/img_avatar.png" alt="avatar.png">
                <div class="testimonial-text">
                    <p class="testimonial-paragraph">"¡Los pasteles de Dafne's Bakery son una verdadera obra de arte! Cada bocado es una explosión de sabores y texturas—deben ser los mejores pasteles en Guatemala."</p>
                    <p class="testimonial-author">Pablo Prado</p>
                    <p class="testimonial-author-title">Amante de los Postres</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection