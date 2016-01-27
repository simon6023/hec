<?php
	
	// connexion à la base de données
	$bdd = new PDO('mysql:host=localhost;dbname=hec_test;charset=utf8', 'root', 'root');
		
	// création de la requête SQL
	$query = $bdd->query('SELECT * FROM user');

	// on récupère chaque résultat dans une variable $data

	while ($data = $query->fetch()) {
		echo $data['firstname'].' '.$data['lastname'];
		echo '<br>';
		echo $data['id'];
	}

	// fermeture de la tâche MySQL
	$query->closeCursor();

?>