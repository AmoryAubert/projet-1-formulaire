<?php
    if($request == 'Accueil' OR $request =='') require './view/accueil.php';
    else if($request == 'Produits') require './view/produits.php';
    else if($request == 'Téléchargements') require './view/telechargement.php';
    else if($request == 'Contact') require './view/contact.php';
    else if($request == 'Contact2') require './view/contact2.php';
    else require './view/404.php';