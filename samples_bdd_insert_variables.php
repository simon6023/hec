<?php

	$bdd = new PDO('mysql:host=localhost;dbname=hec_test;charset=utf8', 'root', 'root');

	$requete = $bdd->prepare("INSERT INTO user(firstname, lastname, gender, city, age, newsletter, created) 
								VALUES(:firstname, :lastname, :gender, :city, :age, :newsletter, :created)");

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