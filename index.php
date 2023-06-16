<?php
include 'include/config.inc.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sabores Do Sol</title>

        <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="/saboressol/images/logo/logo-v3-simples.png" />
        
<!--

Tooplate 2129 Sabores Do Sol

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body>
        
            <?php
                include './include/menu.inc.php';
            ?>

        <main>

            <section class="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 m-auto">
                            <div class="heroText">

                                <h1 class="text-var(--dark-color) mb-lg-5 mb-3">Sabores do Sol</h1>

                                <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h4 class="text-var(--dark-color) mb-0 me-3">Uma pastelaria </br> amiga da natureza </br> com alimentos da melhor qualidade</h4>
                                        
                                    </div>
                                </div>
                                <h4 class="text-white mb-0 me-3"></h4>
                                <p class="text-var(--dark-color) w-100">Produtos fornecidos pelo Centro de Ciência Viva da Floresta de Proença-a-Nova</p>
                            </div>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-image-wrap">
                                            <img onclick="window.open('about.php', '_self')" src="images/slide/jay-wennington-N_Y88TWmGwA-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            
                                            <h4 class="hero-text">Sobre a Sabores do Sol</h4>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img onclick="window.open('menu.php', '_self')" src="images/slide/jason-leung-O67LZfeyYBk-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Os Mossos Menus Especiais</h4>

                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                

                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img onclick="window.open('news.php', '_self')" src="images/slide/ivan-torres-MQUqbmszGGM-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">As nossas Notícias</h4>

                                            
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Seguinte</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="overlay"></div>
            </section>

        <footer class="site-footer section-padding">
            
            <?php
            include 'include/footer.inc.php';
            ?>
             
        </footer>

        <!-- Modal -->
        <?php
        include './include/reserva.inc.php';
        ?>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
