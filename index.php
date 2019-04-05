<?php
if (($request = $_GET['page'])==NULL){
    header('Location: index.php?page=Accueil');
    $request='Accueil';
    exit();
} else {  
    $request = $_GET['page'];
}
require './view/template/hackerspoulette.php';
?>