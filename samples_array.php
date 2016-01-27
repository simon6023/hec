<?php
	
	// déclaration d'un tableau vide
	$tableau = array();


	// tableau contenant des chaînes de caractères
	$tableau = array('France', 'Espagne', 'Allemagne', 'Italie');

	// peut également s'écrire sur plusieurs lignes pour plus de clarté
	$tableau = array(
				'France',
				'Espagne',
				'Allemagne',
				'Italie'
			);

	/*
		PARCOURIR UN TABLEAU
		la boucle FOREACH est utilisée pour parcourir les valeurs d'un tableau
		elle prend en paramètre le tableau, et la variable assignée pour chaque valeur de celui-ci
	*/

	foreach ($tableau as $valeur) {
		echo $valeur;
		echo '<br>';
	}

?>


	<!--
		AFFICHER DU HTML
		cet exemple affiche une liste déroulante contenant la liste des pays du tableau
	-->

	<select name"pays" id="pays">
		<?php foreach ($tableau as $pays) : ?>
			<option value="<?php echo $pays; ?>"><?php echo $pays; ?></option>
		<?php endforeach; ?>
	</select>


<?php
	
	// trier un tableau (par ordre alphabétique, ou du plus petit au plus grand)
	
	sort($tableau);

	// afficher toutes les valeurs du tableau
	// cette fonction est utilisée en phase de développement, pas sur un site en production
	var_dump($tableau);


	/*
		DÉFINIR DES INDEX
	*/

	// déclaration d'un tableau contenant en index un horaire, et en valeur une tâche ou un événement
	$agenda = array(
		'8h - 9h' => 'Cours 1',
		'11h - 13h' => 'Cours 2',
		'15h - 17h' => 'Cours 3',
		'18h - 20h' => 'Happy Hour',
	);

	// on parcourt ce tableau en assignant une variable $horaire à l'index,
	// et une variable $tache à la valeur associée à cet index

	foreach ($agenda as $horaire => $tache) {
		echo '<strong>'.$horaire.' :</strong> '.$tache;
		echo '<br>';
	}



	/*
		LES TABLEAUX MULTIDIMENSIONNELS ou IMBRIQUÉS
		ici, notre variable $family va contenir d'autres tableaux
		chaque tableau contenu dans $family sera composé d'un index 'firstname' et d'un index 'age'
	*/

	$family = array(
			array(
				'firstname' => 'Balthazar',
				'age' => 20,
			),
			array(
				'firstname' => 'Melchior',
				'age' => 39,
			),
			array(
				'firstname' => 'Gaspard',
				'age' => 53,
			),
		);

	// on parcourt le tableau, cette fois en assignant une seule variable à chaque valeur

	foreach ($family as $member) {
		
		// on affiche les valeurs contenues dans le sous-tableau $member,
		// en utlisant le nom de l'index

		echo $member['firstname'].' : ' . $member['age'];
		echo '<br>';
	}

	
?>