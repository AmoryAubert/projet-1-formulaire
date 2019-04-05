<?php
if($_POST){
	$honeypot = $_POST['firstname'];
	if( !empty($honeypot) ){
        //si c'est un enfoiré de robot à la con !
        //on ne fait rien
		return; 
	}else{
		//si c'est OK !
		//on filtre toutes les données entrées
        $options = array(
            'prenom' 	    => FILTER_SANITIZE_STRING,
            'nom' 	        => FILTER_SANITIZE_STRING,
            'email' 		=> FILTER_VALIDATE_EMAIL,
            'message' 		=> FILTER_SANITIZE_STRING
        );
        $result = filter_input_array(INPUT_POST, $options);
        foreach($options as $key => $value) 
        {
           $result[$key]=trim($result[$key]);
        }
        $genre=$_POST['genre'];
        $pays=$_POST['pays'];
        $sujets=$_POST['sujet'];
        if ($genre=="f"){
            $genre="femme";
        } else {
            $genre="homme";
        }
		if (empty($sujets)){
			$sujets[0]="autre";
		}
        //$N = count($sujets);
        //echo("You selected $N door(s): ");
        //for($i=0; $i < $N; $i++)
        //{
        //  echo($sujets[$i] . " ");
        //}
        //echo "<p>".$result['prenom']."</p>";
        //echo "<p>".$result['nom']."</p>";
        //echo "<p>".$genre."</p>";
        //echo "<p>".$result['email']."</p>";
        //echo "<p>".$pays."</p>";
        //echo "<p>".$sujets."</p>";
        //echo "<p>".$result['message']."</p>";
	}
}
?>