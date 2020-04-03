//Binôme : ABDESLAMI ZAYNA 
	// HMAIDDOUCH NADA
//Groupe:  G1



<?php
session_start(); 

    $password=$_POST['pass'];
 
    if (preg_match('/^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.\W).{8,}$/', $password)) {
        echo 'Mot de passe conforme';
	}
	
    else {
        echo 'Mot de passe non conforme';
	}	
?>
