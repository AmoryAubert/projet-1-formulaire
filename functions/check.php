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
            $genre="Madame";
        } else {
            $genre="Monsieur";
        }
		if (empty($sujets)){
			$sujets[0]="autre";
		}
		$passage_ligne = "\n";
		$mail = "hels@alwaysdata.net";
		$N = count($sujets);
		$sujet="Sujet: ";
        for($i=0; $i < $N; $i++)
        {
          $sujet.=$sujets[$i] . " ";
        }
		$boundary = "-----=".md5(rand());
		$header = "From: \"Hackers Poulette\"<".$result['email'].">".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		
		$message_html= "<html><head></head><body><p>Message de ".$genre." ".$result['prenom']." ".$result['nom']."(".$pays.")</p><p>".$result['message']."</p></body></html>";
		$message_txt= "Message de ".$genre." ".$result['prenom']." ".$result['nom']."(".$pays.")".$passage_ligne.$result['message'];
		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		//==========
		//var_dump($message);
		mail($mail,$sujet,$message,$header);
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