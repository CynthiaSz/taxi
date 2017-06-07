<?php

// pour rester connecter
session_start();

include 'connect.php';

 //prépare la requête à insérer dans la base de données
$req = $bdd->prepare('INSERT INTO courses (destination, nb_personnes, date_course) VALUES (:destination, :nb_personnes, :date_course)');

//exécute la requête et les données sont enregistrées sous forme de tableau
$req->execute(array(
	'destination'=>$_GET['destination'],
	'nb_personnes'=>$_GET['nb_personnes'],
	'date_course'=>$_GET['date_course']
	));

header('Location:account.php?destination='.$_GET['destination'].'&nb_personnes='.$_GET['nb_personnes'].'&date_course='.$_GET['date_course'].'');
?>

