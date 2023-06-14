<?php
session_start();
include 'include/config.inc.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Crispy Kitchen Menu</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                  
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.cycle.all.js"></script>

        <script src="js/functions.js"></script>
        
        
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body >
        
    <?php
    include './include/menu.inc.php';
    ?>

        <main>

            <header class="site-header site-menu-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Produtos</h1>

                            <strong class="text-white">Os nossos menus e produtos à sua desposição</strong>
                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </header>

            <section class="menu section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Os Nossos Produtos</h2>
                        </div>
                    </div>
                        
b


rdytr


                </div>
            </section>

            <section class="menu section-padding">
                <div class="container">

                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Menus</h2>
                        </div>

                        
                        <?php
                        
                        $menus = getJsonData("menus.json");
                        $menu = $menus->menus;

                        $index = 0;

                        for($j = 0; $j < count($menu); $j++){

                            ?>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="menu-thumb">
                                    <img class="gifs" src="<?php echo $menu[$index]->image[0] ?>" class="img-fluid menu-image" alt="">

                                    <div class="menu-info d-flex flex-wrap align-items-center">
                                        <h4 class="mb-0"><?php echo $menu[$index]->name ?></h4>

                                        <span class="price-tag bg-white shadow-lg ms-4"><?php echo $menu[0]->price ?><small>€</small></span>

                                        <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                            <h6 class="reviews-text mb-0 me-3"><?php echo $menu[$index]->review ?>/5</h6>

                                            <div class="reviews-stars">
                                                <?php
                                                
                                                for($i = 0; $i < $menu[$index]->review; $i++){
                                                    echo '<i class="bi-star-fill reviews-icon"></i>';
                                                }
                                                
                                                ?>
                                            </div>

                                            <p class="reviews-text mb-0 ms-4"><?php echo $menu[$index]->review_count ?> Reviews</p>
                                        </div>
                                        <?php 

                                            //More info pop up
                                            echo "<button class='seemore' onclick=\"showMenuInfo('".$menu[$index]->name."')\">Ver mais</button>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php

                            $index++;
                        }
                        ?>

                    </div>
                </div>
            </section>

        </main>

        <div class="pop-up" id="popup">
            <button class="close-button" onclick="document.getElementById('popup').style.display = 'none'">&#10006;</button>
            <h3 id="pop-title"></h3>
            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                <div class="reviews-stars" id="pop-stars">
                </div>
                <p id="pop-reviews" class="reviews-text mb-0 ms-4"></p>
                <span id="pop-price" class="ms-4"></span>
            </div>
            
            <div class="flex-parent-element">
                <div class='flex-child-element'>

                    <h4>Sobre o menu</h4>
                    <p id="pop-desc"></p>

                </div>
                <div id="container" class='flex-child-element full'>

                    <!-- <img src="" alt="" id="pop-img"> -->

                </div>
            </div>

        </div>

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

    </body>
</html>
