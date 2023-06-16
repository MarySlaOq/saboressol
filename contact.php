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

        <title>Contactos Sabores do Sol</title>

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

            <header class="site-header site-contact-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Contactos</h1>

                            <strong class="text-white">Contacte-nos e saiba mais</strong>
                        </div>

                    </div>
                </div>
                
                <div class="overlay"></div>
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Envie uma mensagem</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="#" method="post" role="form">
                                <div class="col-lg-6 col-6">
                                    <label for="contact-name" class="form-label">Nome Completo</label>

                                    <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Nome" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Número de Telefone</label>

                                    <input type="telephone" name="contact-phone" id="contact-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="123-456-7890">
                                </div>

                                <div class="col-12">
                                    <label for="contact-email" class="form-label">Email</label>

                                    <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="">

                                    <label for="contact-message" class="form-label">Mensagem</label>

                                    <textarea class="form-control" rows="5" id="contact-message" name="contact-message" placeholder="Mensagem"></textarea>
                                </div>

                                <div class="col-lg-5 col-12 ms-auto">
                                    <button type="submit" class="form-control">Enviar</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                            <h5>Dias da Semana</h5>

                            <div class="d-flex mb-lg-3">
                                <p>Segunda a sexta</p>

                                <p class="ms-5">09:00 - 19:00</p>
                            </div>

                            <h5>Fins de semana</h5>

                            <div class="d-flex">
                                <p>Sábados e Domingos</p>

                                <p class="ms-5">10:30 - 17:00</p>
                            </div>

                            <h5>Feriados</h5>

                            <div class="d-flex">
                                <p>Feriados e Festividades</p>

                                <p class="ms-5">09:30 - 16:00</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4 class="mt-5 mb-4">R. Pádua Correia 166, 4430-999 Vila Nova de Gaia</h4>

                            <div class="google-map pt-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12021.54378460987!2d-8.608929!3d41.1261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96d9bb511fe3c719!2sCol%C3%A9gio+De+Gaia!5e0!3m2!1sen!2sus!4v1444598391732" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
