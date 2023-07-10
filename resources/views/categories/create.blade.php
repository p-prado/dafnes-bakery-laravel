@extends('layout')

@section('title')
    <title>Nueva Categoría</title>
@endsection

@section('imports')
    <link rel="stylesheet" href="{{ asset('resources/css/create.css') }}">
@endsection

@section('content')

    @include('partials.header')
    <section>
        <div class="container">
            <form action="/categoria" method="post">
                @csrf
                <h1>Nueva Categoría</h2>
                <div class="input-row">
                    <div class="input-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Nombre">
                    </div>
                </div>
                <div class="input-group">
                    <label for="description">Descripción</label>
                    <textarea type="text" id="textarea" name="description" rows="4" placeholder="Escribe una descripción corta..." oninput="updateCount(10,50)"></textarea>
                    <p class="length"><span id="count" class="count">0</span> / 50</p>
                </div>
                <button class="button-primary" type="submit">Crear</button>
            </form>
        </div>
    </section>

@endsection

@section('footer-imports')
    <script src="{{ asset('resources/js/count.js') }}" defer></script>    
@endsection