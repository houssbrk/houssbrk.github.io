<!DOCTYPE html>
<html>
<head>
	<title>Kortex - Sign up</title>
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

	<?php 
	$pseudo = $_POST('pseudo');
	$pass = $_POST('pass');
	$pass2 = $_POST('pass2');
	$email = $_POST('email');

	if($pass != $pass2)
	{
		echo '- Les mots de passe ne sont pas identiques';
		?>
	<p>Veuillez <a href="formulaire.php">réessayer !</a></p>
	<?php
	}
	?>


	<?php include("footer.php") ?>

</body>
</html>