<?php
if($_POST){
	$honeypot = $_POST['firstname'];
	if( !empty($honeypot) ){
        //echo "<h1>enfoiré de robot à la con !</h1>";
		return; 
	}else{
		//echo "<h1>OK</h1>";
	}
}
?>