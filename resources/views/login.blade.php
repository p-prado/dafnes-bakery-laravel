@extends('layout')

@section('title')
    <title>Iniciar Sesión | Dafne's Bakery</title>
@endsection

@section('imports')
    <link rel="stylesheet" href="resources/css/header.css">
    <link rel="stylesheet" href="resources/css/login.css">
@endsection

@section('content')

@include('partials.header')

    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="">
            <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <button type="submit" class="button-primary">Log In</button>
        </form>
    </div>

@endsection