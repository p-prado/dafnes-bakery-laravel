@extends('layout')

@section('title')
    <title>{{$title}}</title>
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
                <h1 class="hero-title">{{$title}}</h1>
            </div>
        </div>
    </div>

    <!-- SECTION: PRODUCTS -->
    <div id="productos">

        <div class="container">
            <div class="breadcrumbs">
                <p><a href="">Productos</a> > <a href="">Categorias</a> > <a href="">{{$title}}</a></p>
            </div>
            <div class="product-card-container">
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://cdn7.kiwilimon.com/recetaimagen/31211/35832.jpg" alt="Pastel Tiramisú"
                            class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel Tiramisú</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F21%2F2017%2F02%2F24%2F3a23ae4b-48b7-44eb-96a7-0e8e755683b6-2000.jpg&q=60"
                            alt="Pastel de Chocolate" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel de Chocolate</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://i0.wp.com/lohecocinadoyo.com/wp-content/uploads/2015/02/DSC_0659_Tarta-de-Limon.jpg?fit=1950%2C1299&ssl=1"
                            alt="Pastel de Frutos" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel de Frutos</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://cdn0.recetasgratis.net/es/posts/0/1/9/torta_tres_leches_8910_orig.jpg"
                            alt="Pastel" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel Tres Leches</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://storage.googleapis.com/patsy-ecommerce.appspot.com/PASTEL_CHOCOFLAN_copia_f2b4acfd3b"
                            alt="Pastel" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel Media Noche</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://images-gmi-pmc.edge-generalmills.com/5cc8a62f-e986-4894-9312-a09a6bec1274.jpg"
                            alt="Pastel" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel de Helado</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://cusiworld.com/wp-content/uploads/2023/02/torta-zanahoria-avena-receta-pastel-1200x900.jpg"
                            alt="Pastel" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel de Zanahoria</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpvJbPWeeQZcpciPVFRqg0ykd2SMh9pAenng&usqp=CAU"
                            alt="Pastel" class="card-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Pastel de Almendras y Caramelo</h3>
                        <p class="price">Q100</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



    