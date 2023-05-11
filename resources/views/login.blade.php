<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- ATTEMPT TO IMPORT FONT AWESOME -->
    <link rel="icon" type="image/x-icon" href="resources/assets/favicon.png">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="stylesheet" href="resources/css/header.css">
    <link rel="stylesheet" href="resources/css/login.css">
</head>

<body>

@include('partials.header')

    <main>
        <div class="container">
            <h1>Iniciar Sesión</h1>
            <form action="">
                <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <button type="submit" class="button-primary">Log In</button>
            </form>
        </div>
    </main>

    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-main')
        @include('partials.footer-copy')
    </footer>
</body>

</html>