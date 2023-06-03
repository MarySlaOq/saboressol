
<ul class="navbar-nav mx-auto">
    <?php
    
    include_once "include/helpers.inc.php";

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

    navLink('index.php', 'Home');
    navLink('about.php', 'Sobre Nós');
    navLink('menu.php', 'Menus');
    navLink('news.php', 'As nossas notícias');
    navLink('contact.php', 'Contactos');
    navLink('iku.php', 'いく！');
    //QUE E ISTO
    //algo mt importante para o desenvolvimento do website!!!!!
    ?>

</ul>