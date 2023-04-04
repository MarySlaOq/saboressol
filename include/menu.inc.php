<ul class="navbar-nav mx-auto">
    <?php
    $result = $database->select(
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
    }

    ?>

</ul>