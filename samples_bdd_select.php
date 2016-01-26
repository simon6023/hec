<?php

	$query = $bdd->query('SELECT * FROM user');

	while ($data = $query->fetch()) {
		echo $data['firstname'].' '.$data['lastname'];
		echo '<br>';
		echo $data['id'];
	}

	$query->closeCursor();

?>