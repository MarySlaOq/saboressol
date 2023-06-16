
<ul class="navbar-nav mx-auto">
    <?php
    
    include_once "include/helpers.inc.php";
    include_once "translations/translations.php";

    if(!isset($_SESSION["lang"])) $_SESSION["lang"] = 1;
    if($_SESSION["lang"] == 2) $_SESSION["lang"] = 0;

    /*$result = $database->select(
        'menu',
        [
            'name',
            'url',
            'active'
        ],
        [
            'active' => 1
        ]
    );

    foreach ($result as $nav) {
        navLink($nav['url'], $nav['name']);
    }*/

    // navLink('index.php', 'Home');
    // navLink('about.php', 'Sobre Nós');
    // navLink('menu.php', 'Menus');
    // navLink('news.php', 'As nossas notícias');
    // navLink('contact.php', 'Contactos');
    // navLink('iku.php', 'いく！');
    //QUE E ISTO
    //algo mt importante para o desenvolvimento do website!!!!!
    ?>

        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">
                    Sabores do Sol
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservas</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <?php
                    
                            navLink('index.php', $translations["home"][$_SESSION["lang"]]);
                            navLink('about.php', $translations["about"][$_SESSION["lang"]]);
                            navLink('menu.php', $translations["menu"][$_SESSION["lang"]]);
                            navLink('news.php', $translations["news"][$_SESSION["lang"]]);
                            navLink('contact.php', $translations["cont"][$_SESSION["lang"]]);
                            //navLink('iku.php', 'いく！');//

                        ?>
                    </ul>
                </div>

                <a href="lang.php?lang=1"><img style="width: 50px; margin-right: 30px" src="images/flags/portugal.png" alt=""></a>
                <a href="lang.php?lang=0"><img style="width: 43px; margin-right: 30px" src="images/flags/united-kingdom.png" alt=""></a>

                <div class="d-none d-lg-block">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservas</button>
                </div>

            </div>
        </na>

</ul>

