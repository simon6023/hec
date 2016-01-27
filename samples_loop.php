<?php

	/*
		BOUCLE WHILE
	*/

	// cette phrase sera affichée X fois, en fonction du paramètre $max
	$phrase = "La phrase à répéter<br>";
	$nbr = 1;
	$max = 10;

	/* 
		déclaration de la boucle :
		tant que la valeur de la variable $nbr sera inférieur ou égal à la variable $max,
		la phrase sera affichée
	*/
	
	while ($nbr <= $max) {

		// on affiche la phrase
		echo $phrase;
		
		// on incrémente la valeur $nbr, pour que la boucle puisse s'arrêter
		$nbr++;
	}



	/*
		BOUCLE FOR
	*/

	$phrase = "La deuxième phrase à répéter<br>";

	/*
		la déclaration des paramètres se fait dans la déclaration de la fonction
		le premier paramètre est l'état de départ, soit $nbr = 1
		le deuxième est la condition d'arrêt de la fonction, ici la fonction s'arrête si $nbr est supérieur à 10
		le troisième paramètre est l'opération à effectuer sur la variable de départ à chaque itération de la boucle,
			ici, nous ajoutons 1 à la variable $nbr
	*/

	for ($nbr = 1 ; $nbr <= 10 ; $nbr++) {
		echo $phrase;
	}
?>