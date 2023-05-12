<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- ATTEMPT TO IMPORT FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b4e0939b37.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('resources/assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    </head>
<body>
<!-- SECTION: HEADER -->
<header>
    <div class="container">
        <div class="transparent-header">
            <h2 class="logo"><a href="#">Dafne's Bakery</a></h2>
            <nav>
                <ul id="transparent-navigation" class="transparent-navigation">
                    <li><a href="dafnes-bakery/index.html">Inicio</a></li>
                    <li><a href="#">Pasteles y Pies</a></li>
                    <li><a href="#">Galletas</a></li>
                    <li><a href="#">Otros</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

    <main>
        <div class="container">
            <h1>Productos</h1>
            <a class="button-primary" href="#" >Add New</a>
            <table>
                <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th class="description">Descripción</th>
                        <th>Acciones</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="id">3</td>
                        <td>Pastel de Chocolate</td>
                        <td class="description">Delicioso pastel de Lorem ipsum dolor sit amet consectetur adipisicing elit. Non blanditiis praesentium</td>
                        <td class="actions"><a href=""><i class="fa-regular fa-pen-to-square"></i></a> | <a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                    <tr>
                        <td class="id">7</td>
                        <td>Flan de Chocolate</td>
                        <td class="description">Delicioso pastel de Lorem ipsum dolor sit amet consectetur adipisicing elit. Non blanditiis praesentium</td>
                        <td class="actions"><a href=""><i class="fa-regular fa-pen-to-square"></i></a> | <a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                    <tr>
                        <td class="id">4</td>
                        <td>Pastel de Frambuesa</td>
                        <td class="description">Delicioso pastel de Lorem ipsum dolor sit amet consectetur adipisicing elit. Non blanditiis praesentium</td>
                        <td class="actions"><a href=""><i class="fa-regular fa-pen-to-square"></i></a> | <a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                    <tr>
                        <td class="id">28</td>
                        <td>Tres Leches</td>
                        <td class="description">Delicioso pastel de Lorem ipsum dolor sit amet consectetur adipisicing elit. Non blanditiis praesentium</td>
                        <td class="actions"><a href=""><i class="fa-regular fa-pen-to-square"></i></a> | <a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-copy')
    </footer>
</body>
</html>