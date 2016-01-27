<?php

	// déclaration de la variable $country
	$country = "France";

	// première condition : IF
	// teste si la variable $country est égale à la chaîne de caractères France
	
	if ($country == "France") {
		echo "Bienvenue !";
	}
	elseif ($country == "Italie") { // deuxième condition : elseif, teste si $country est égale à Italie
		echo "Benvenuto !";
	}
	elseif ($country == "Allemagne") { // idem, si $country est égale à Allemagne
		echo "Willkommen !";
	}
	else { // résultat par défaut, si aucune des autres conditions n'est vraie
		echo "Welcome !";
	}




	/*
		TEST SUR UNE VARIABLE DE TYPE INT (nombre entier)
	*/

	$age = 25;

	// si $age est supérieur ou égal à 18, on affiche le message de bienvenue
	if ($age >= 18) {
		echo "Bienvenue !";
	}
	else { // sinon, on interdit l'accès
		echo "Accès interdit";
	}


	/*
		TEST SUR UNE VARIABLE DE TYPE BOOL (booléen, vaut true ou false)
	*/

	$login = true;

	if ($login == true) {
		echo "Bienvenue !";
	}
	else {
		echo "Accès interdit";
	}

	// pour les booléens, la condition peut également s'écrire
	if ($login) {
		echo "Bienvenue !";
	}

	
?>
