<?php

$items = array('Accueil','Produits','Téléchargements','Contact');

$link = 'http://localhost/projet-1-formulaire/index.php';

function menu($array,$link){
    foreach($array as $val){
        echo '<a class="nav-item nav-link" href='.$link.'?page='. $val .' ">'. $val .'</a>';
    }
}
function boutique(){
    $file_handle = fopen("./assets/txt/boutique.txt","rb");
    while (!feof($file_handle) ) {
        $line_of_text = fgets($file_handle);
        $parts = explode(',', $line_of_text);
        echo '<div class="shop-box">
                   <img src="./assets/img/'.$parts[0].'" alt="'.$parts[0].'">
                   <p>'.$parts[1].'</p>
                   <p>'.$parts[2].'</p>
              </div>';
    }
    fclose($file_handle);
}