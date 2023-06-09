<?php

function navLink($url, $name)
{
    if (strpos($_SERVER['REQUEST_URI'], $url) !== false) {
        echo '  <li class="nav-item">
    <a class="nav-link active" href="' . $url . '">' . $name . '</a>
</li>';
    } else {
        echo '  <li class="nav-item">
    <a class="nav-link" href="' . $url . '">' . $name . '</a>
</li>';
    }
}

function getJsonData($file){

    $json = json_decode(file_get_contents("data/".$file));
    return $json;
}