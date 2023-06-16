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

        <title>Sobre a Sabores do Sol</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/saboressol/images/logo/logo-v3-simples.png" />
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body>
    
            <?php
                include './include/menu.inc.php';
            ?>

        <main>

            <header class="site-header site-about-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">A nossa História</h1>

                            <strong class="text-white">Quem somos e como criamos a Sabores do Sol</strong>
                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </header>

            <section class="about newPad bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5">História</h2>
                        </div>
                        <div class="bio">
                            <p>Somos um pequeno grupo com sede no porto, preocupado com o meio ambiente.</p>
                        	<p>A Sabores do Sol é uma pastelaria especializada no uso de plantas e flores comestíveis para decoração de bolos e doces. Com ela, queremos pertencer a um mundo mais agradável e natural.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Membros de equipa</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/matthew-hamilton-tNCH0sKSZbA-unsplash.jpg" class="img-fluid team-image" alt="">
                                
                                <div class="team-info">
                                    <h4 class="mt-3 mb-0">Maria</h4>

                                    <p>Criadora e fundadora</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-lg-0 my-4">
                            <div class="team-thumb">
                                <img src="images/team/nicolas-horn-MTZTGvDsHFY-unsplash.jpg" class="img-fluid team-image" alt="">

                                <h4 class="mt-3 mb-0">Sónia</h4>

                                <p>Fornecedora e sócia</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/rc-cf-FMh5o5m5N9E-unsplash.jpg" class="img-fluid team-image" alt="">
                                
                                <h4 class="mt-3 mb-0">Cláudia</h4>

                                <p>Orientadora e sócia</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section class="newsletter section-padding bg-white">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image" alt="">
                        </div>

                        <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                            <div class="subscribe-form-wrap">
                                <h4 class="mb-0">As nossas notícias</h4>

                                <p>Novidades da Sabores do Sol todos os dias</p>

                                <form class="custom-form subscribe-form mt-4" role="form">
                                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="">

                                    <button type="submit" class="form-control mb-3" id="subscribe">Inscreve-te</button>

                                    <small>Com a sua inscrição, concorda com nosso Aviso de Privacidade e a política de dados.</small>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

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
