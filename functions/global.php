<?php

$items = array('Accueil','Produits','Téléchargements','Contact');

$link = 'http://localhost/projet-1-formulaire/index.php';

function menu($array,$link){
    foreach($array as $val){
        echo '<a class="nav-item nav-link" href='.$link.'?page='. $val .' ">'. $val .'</a>';
    }
}

