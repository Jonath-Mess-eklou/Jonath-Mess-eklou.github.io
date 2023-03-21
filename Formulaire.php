<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Formulaire de Calcul</title>
	<body>
	<h1>SOMME DE QUATRE VALEURS</h1><br/>
	<h2> Entrez vos coordonnées</h2><br/>
		<form name='formulaire' method='post' action='calcul.php'>
		Nom:<input type="text" name="Nom"><br/>
		Prenom:<input type="text" name="Prenom"><br/>
		Nombre1:<input type='number' name='Nombre1' id='Nombre1' required/><br/>
		Nombre2:<input type='number' name='Nombre2' id='Nombre2' required/><br/>
		Nombre3:<input type='number' name='Nombre3' id='Nombre3' required/><br/>
		Nombre4:<input type='number' name='Nombre4' id='Nombre4' required/><br/>
		Valider:<input type='submit' valeur='calculer'/>
	<?php
	if(isset($_post['Nombre1']) AND isset($_post['Nombre2']) AND isset($_post['Nombre3']) AND isset($_post['Nombre4']) AND isset($_['calcul']))
	{
	$Nombre1=htmlspecialchars($_['Nombre1']);
	$Nombre2=htmlspecialchars($_['Nombre2']);
	$Nombre3=htmlspecialchars($_['Nombre2']);
	$Nombre4=htmlspecialchars($_['Nombre2']);
	
	$calculer=Nombre1+Nombre2+Nombre3+Nombre4;
	echo 'la somme est:'$calculer;
	
	}
	
	
	
	</body>
</head>




</html>