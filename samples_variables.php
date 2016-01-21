<?php
	// déclaration d'une variable
	// nom de la variable : ma_variable
	// valeur : 'Hello World!' de type string (chaîne de caractères)
	$ma_variable = 'Hello World!';

	/* 
		AUTRES TYPES DE VARIABLES :
			int : pour integer, un nombre entier
			float : un nombre à virgules
			bool : un booléen, soit true soit false
			null : une donnée "vide"
	*/

	// afficher le contenu de la variable
	echo $ma_variable;

	// modifier le contenu de la variable après l'affichage
	// modifier le type
	$ma_variable = 200;

	// affichera maintenant 200
	echo $ma_variable;

	// effectuer des calculs sur une variabe
	$nombre = 20;

	// ajouter 10
	$nombre = $nombre + 10;
	// peut également s'écrire
	$nombre += 10;

	// soustraire 5
	$nombre = $nombre - 5;
	// ou
	$nombre -= 5;

	// incrémenter un nombre (ajouter 1)
	$nombre++;

	// décrémenter (soustraire 1)
	$nombre--;

	/*
		Concaténer une variable :
		afficher le contenu du variable à l'intérieur d'une chaîne de caractères
	*/

	$name = 'Balthazar';
	echo 'Je m\'appelle '.$name.' et j\'ai 30 ans.';
?>