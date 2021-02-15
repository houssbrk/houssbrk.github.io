<!DOCTYPE html>
<html>
<head>
	<title>Kortex - Home page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="formulaire.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Basic&display=swap" rel="stylesheet">
</head>
<body>
	<?php include("header.php") ?>

	<section>
		<form method="POST" action="traitement.php" id="form1">
			<label>Choisissez votre pseudo : <input type="text" name="pseudo" maxlength="15"></label><br>
			<label>Choisissez votre mot de passe : <input type="password" name="pass"></label><br>
			<label>Confirmez votre mot de passe : <input type="password" name="pass2"></label><br>
			<label>Votre e-mail : <input type="e-mail" name="email"></label><br>
			<input type="submit" value="Confirmer" style="font-family: 'Comfortaa', cursive;">

		</form>
	</section>
	<?php include("footer.php") ?>
		


</body>
</html>