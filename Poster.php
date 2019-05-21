<?php
require('configuration.php');

$sql = 'INSERT INTO follow (`pseudo`,`commentaire`) VALUES (`pseudo`,`commentaire`)';
$statement = $pdo ->prepare($sql);
			$statement-> execute(['pseudo']);
			$result = $statement->fetch();

		$requete = 'SELECT * FROM follow ORDER BY id DESC LIMIT 10';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetchAll()) {
			echo $ligne['pseudo'].' '.$ligne['coomentaire'];
	}	
		$mysqli->close();
		