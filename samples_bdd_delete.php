<?php
	
	// connexion à la base de données
	$bdd = new PDO('mysql:host=localhost;dbname=hec_test;charset=utf8', 'root', 'root');
	
	// on stocke le nombre d'enregistrements supprimés dans une variable $nb_delete
	// et on exécute la requête 
	$nb_delete = $bdd->exec('DELETE FROM user WHERE id = 1');

	echo $nb_delete.' ont été supprimées';

?>