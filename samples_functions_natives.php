<?php
	
	// afficher la date au format jour/mois/année
	echo date('d/m/Y');

	// afficher la date au format jour/mois/année heures:secondes:minutes
	echo date('d/m/Y H:i:s');

	// afficher la longueur d'une chaîne de caractères
	echo strlen("Chaîne de caractères");

	// remplacer un ou plusieurs caractères par un ou plusieurs autres
	// la fonction remplace "caractères" par "test" dans la chaîne "Chaîne de caractères"
	echo str_replace('caractères', 'test', 'Chaîne de caractères');

	// convertir des majuscules en minuscules
	echo strtolower('CHAÎNE DE CARACTÈRES');

	// convertir des minuscules en majuscules
	echo strtoupper('chaîne de caractères');
	
?>