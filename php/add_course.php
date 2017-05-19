<?php

// pour rester connecter
session_start();

 include 'connect.php';

 //prépare la requête à insérer dans la base de données
$req = $bdd->prepare('INSERT INTO courses (nb_personnes, destination, date_course) VALUES (:nb_personnes, :destination, :date_course)');

//exécute la requête et les données sont enregistrées sous forme de tableau
$req->execute(array(
	'nb_personnes'=>$_POST['nb_personnes'],
	'destination'=>$_POST['destination'],
	'date_course'=>$_POST['date_course']
	));

//Celà envoie un message
$msg = 'Votre demande a bien été enregistrée';
   // header('Location: index.php?msg=' . $msg);
?>
