<?php
	
	// connexion à la base de données
	$bdd = new PDO('mysql:host=localhost;dbname=hec_test;charset=utf8', 'root', 'root');
	
	// on stocke le nombre d'enregistrements modifiés dans une variable $nb_modifs
	// et on exécute la requête 
	$nb_modifs = $bdd->exec('UPDATE user SET city = "madrid" WHERE id = 9');

	echo $nb_modifs.' ont été modifiées';

?>