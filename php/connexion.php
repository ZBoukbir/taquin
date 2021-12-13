<?php
    $link = mysqli_connect('localhost','root','', 'taquin');
    mysqli_set_charset($link, 'utf8');

    if (!$link) {
        die('Erreur de connexion');
    }
?>