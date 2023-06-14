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

        <title>Crispy Kitchen - Contact Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
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

                                    <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Número de Telefone</label>

                                    <input type="telephone" name="contact-phone" id="contact-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="123-456-7890">
                                </div>

                                <div class="col-12">
                                    <label for="contact-email" class="form-label">Email</label>

                                    <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email" required="">

                                    <label for="contact-message" class="form-label">Mensagem</label>

                                    <textarea class="form-control" rows="5" id="contact-message" name="contact-message" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-lg-5 col-12 ms-auto">
                                    <button type="submit" class="form-control">Enviar</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                            <h5>Weekdays</h5>

                            <div class="d-flex mb-lg-3">
                                <p>Monday to Friday</p>

                                <p class="ms-5">10:00 AM - 08:00 PM</p>
                            </div>

                            <h5>Weekends</h5>

                            <div class="d-flex">
                                <p>Saturday and Sunday</p>

                                <p class="ms-5">11:00 AM - 11:00 PM</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4 class="mt-5 mb-4">R. Pádua Correia 166, 4430-999 Vila Nova de Gaia</h4>

                            <div class="google-map pt-3">
                                <iframe src="https://www.google.co.th/maps/place/Gaia+College/@41.1257722,-8.6095826,511m/data=!3m2!1e3!4b1!4m6!3m5!1s0xd2464d119daed09:0x96d9bb511fe3c719!8m2!3d41.1257722!4d-8.6095826!16s%2Fg%2F1td7k05y?hl=en&entry=ttu" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0">Reserve a table</h3>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">
                            
                            <form class="booking-form row" role="form" action="#" method="post">
                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Full Name</label>

                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="phone" class="form-label">Phone Number</label>

                                    <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="123-456-7890">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="people" class="form-label">Number of persons</label>

                                    <input type="text" name="people" id="people" class="form-control" placeholder="12 persons">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="date" class="form-label">Date</label>

                                    <input type="date" name="date" id="date" value="" class="form-control">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="time" class="form-label">Time</label>

                                    <select class="form-select form-control" name="time" id="time">
                                      <option value="5" selected>5:00 PM</option>
                                      <option value="6">6:00 PM</option>
                                      <option value="7">7:00 PM</option>
                                      <option value="8">8:00 PM</option>
                                      <option value="9">9:00 PM</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Special Request</label>

                                    <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control">Submit Request</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer"></div>
                    
                </div>
                
            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
