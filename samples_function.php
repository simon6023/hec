<?php
	
	// déclaration d'une fonction appelée calculerAge
	// cette fonction calcule l'âge d'une personne en fonction de son année de naissance
	// la fonction prend 1 paramètre, l'année de naissance
	
	function calculerAge($birth_year) {

		// récupération de l'année en cours
		$current_year = date('Y');

		// calcul de l'âge, année courante - année de naissance
		$age = $current_year - $birth_year;

		// instruction de retour de la fonction
		// la variable $age sera retournée lorsque la fonction sera appelée
		return $age;
	}


	// appel de la fonction
	echo calculerAge(1987);
?>