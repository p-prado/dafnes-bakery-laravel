<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafne's Bakery</title>
    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="icon" type="image/x-icon" href="resources/assets/favicon.png">
    <script src="{{ asset('js/nav.js') }}" defer></script>
    <script src="{{ asset('resources/js/slider.js') }}" defer></script>
</head>

<body>
    <main>
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
                        
                        <div class="card">
                            <div class="card-img-container">
                                <img src="https://jennakateathome.com/wp-content/uploads/2022/02/fresh-fruit-cake-27.jpg"
                                    alt="Tartaleta de Frutas" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Tartaleta de Frutas</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/1" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-img-container">
                                <img src="https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_960_720.jpg"
                                    alt="Another Cake" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Pastel Tiramisú</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/2" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-img-container"><img
                                    src="https://www.simplyrecipes.com/thmb/ZlneAHm5YFTLLTiZi7GBZv4Q23c=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Strawberry-Shortcake-LEAD-03-810bac55a6e3461fb92c909db4dbbb61.jpg"
                                    alt="One more cake" class="card-img"></div>
                            <div class="card-body">
                                <h3 class="card-title">Pastel de Fresa</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/3" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-img-container">
                                <img src="https://www.washingtonpost.com/resizer/_J11oFEwS42B6P6exGC5JfPjHF8=/arc-anglerfish-washpost-prod-washpost/public/DGPKA2BBGUI6ZKGZBAT2FJFZCU.jpg"
                                    alt="Tartaleta de Frutas" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Pie de Manzana</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/4" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-img-container">
                                <img src="https://www.allrecipes.com/thmb/6nqNtp49mWLyPt-sX9dbRvcbkgc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/6711176-the-perfect-chocolate-chip-cookie-Ella-Marie-4x3-1-8da322d8da584ea090bdcf9cac95e8ab.jpg"
                                    alt="Another Cake" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Chocolate Chip Cookies</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/5" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-img-container">
                                <img src="https://www.mashed.com/img/gallery/baklava-that-your-family-will-fall-in-love-with/l-intro-1616516957.jpg"
                                    alt="Baklava" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Baklava</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/6" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-img-container">
                                <img src="https://static.onecms.io/wp-content/uploads/sites/43/2022/10/31/17410_Best-No-Bake-Cheesecake_4x3_CD_55616-1.jpg"
                                    alt="Another Cake" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Cheesecake</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem iste
                                    molestias nisi, vel ex optio rem cum id ratione nobis distinctio</p>
                                <a href="/productos/7" class="button-primary card-cta">Comprar</a>
                            </div>
                        </div>

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
    </main>
    <!-- SECTION: FOOTER -->
    <footer>
        @include('partials.footer-main')
        @include('partials.footer-copy')
    </footer></body>
</html>