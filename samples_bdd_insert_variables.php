<?php
	
	// connexion à la base de données
	// paramètre 1 : adresse du serveur, nom de la base de données (dbname), encodage des caractères
	// paramètre 2 : nom d'utilisateur
	// paramètre 3 : mot de passe
	
	$bdd = new PDO('mysql:host=localhost;dbname=hec_test;charset=utf8', 'root', 'root');

	// préparation de la requête
	// liste des champs à insérer et des valeurs associées, 
	// ici les valeurs seront stockées dans un tableau, on indique donc qu'il s'agit de paramètres avec les ":"
	
	$requete = $bdd->prepare("INSERT INTO user(firstname, lastname, gender, city, age, newsletter, created) 
								VALUES(:firstname, :lastname, :gender, :city, :age, :newsletter, :created)");


	
	// récupération des variables et définition des paramètres

	$requete->execute(array(
		'firstname' => $_POST['firstname'],
		'lastname' => $_POST['lastname'],
		'gender' => $_POST['gender'],
		'city' => $_POST['city'],
		'age' => $_POST['age'],
		'newsletter' => $_POST['newsletter'],
		'created' => date('Y-m-d H:i:s'),
	));

?>