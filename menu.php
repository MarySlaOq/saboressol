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

        <title>Sabores do Sol Menu</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                  
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        
        <script src="js/functions.js"></script>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.cycle.all.js"></script>


        <link rel="icon" type="image/png" href="/saboressol/images/logo/logo-v3-simples.png" />
        <script>

            /*

            const popup = document.getElementById("popup");
            window.addEventListener('mouseup', function(event){

                if (event.target != popup && event.target.parentNode != popup){
                
                    document.getElementById("popup").style.display = "none";
                }
            });
             
            */

            function showProductInfo(menu, isProduct){

//Get json file
fetch("/saboressol/data/produtos.json")
.then(response => response.json())
.then(menuData => {
    
    //document.getElementById("about-pop").innerText = isProduct ? "produto" : "menu";
    const mySet = menuData.produtos.filter(m => m.name == menu)[0];
    
    //Open pop up
    //document.body.classList.add("fade-in");
    const popup = document.getElementById("popup");

    popup.style.height = "fit-content";
    popup.style.display = "block";

    //Define the actual elements
    document.getElementById("pop-title").innerText = mySet.name;
    document.getElementById("pop-price").innerText = mySet.price + "€";
    document.getElementById("pop-reviews").innerText = " com " + mySet.review_count + " Avaliações";

    document.getElementById("pop-desc").innerText = mySet.information;

    let starClass = 'bi-star-fill reviews-icon';
    const stars = document.getElementById("pop-stars");
    stars.innerHTML = "";
    
    for(let i = 0; i < mySet.review; i++){

        const star = document.createElement("i");
        star.className = starClass;

        stars.appendChild(star);
    }

    const container = document.getElementById("container");
    container.innerHTML = "";
    for(let i = 0; i < mySet.image.length; i++){

        const img = document.createElement("img");
        img.src = mySet.image[i];

        container.appendChild(img);
    }
    
    $("#container").cycle({
        fx:      'scrollDown',
        speed:    300,
        timeout:  3000
    });
    
});
}

        </script>
        
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
                            <h2 class="mb-lg-5 mb-4">Alguns Produtos</h2>
                        </div>

                        <?php
                        
                        $menus = getJsonData("produtos.json");
                        $menu = $menus->produtos;

                        $index = 0;

                        for($j = 0; $j < count($menu); $j++){

                            ?>

                            <div class="col-lg-4 col-md-6 col-12 menuITEM">
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
                                            echo "<button class='seemore' onclick=\"showProductInfo('".$menu[$index]->name."', true)\">Ver mais</button>";
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

            <section class="menu section-padding">
                <div class="container">

                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Alguns Menus</h2>
                        </div>

                        
                        <?php
                        
                        $menus = getJsonData("menus.json");
                        $menu = $menus->menus;

                        $index = 0;

                        for($j = 0; $j < count($menu); $j++){

                            ?>

                            <div class="col-lg-4 col-md-6 col-12 menuITEM">
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
                                            echo "<button class='seemore' onclick=\"showMenuInfo('".$menu[$index]->name."', false)\">Ver mais</button>";
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

                    <h4>Sobre</h4>
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
        <?php
        include './include/reserva.inc.php';
        ?>

        <!-- JAVASCRIPT FILES -->

    </body>
</html>
