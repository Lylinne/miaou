<?php
//require('Poster.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Miaou</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<div>
			<form class="formulaire" method="POST" action="Poster.php">
				<input type="text" name="pseudo" placeholder="votre Pseudo">
				<textarea name="commentaire" placeholder="votre commentaire">
					
				</textarea>
				<input type="submit" name="poster">
				
			</form>
		</div>
	</div>
</body>
</html>