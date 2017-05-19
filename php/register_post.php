<?php
 include 'connect.php';



 //prépare la requête à insérer dans la base de données
$req = $bdd->prepare('INSERT INTO client (login, password, nom, prenom, tel, email, secu, mutuelle, teletransmission) VALUES (:login, :password, :nom, :prenom, :tel, :email, :secu, :mutuelle, :teletransmission)');

$req->execute(array(
	'login'=>$_POST['login'],
	'password'=>sha1($_POST['password']),
	'nom'=>$_POST['nom'],
	'prenom'=>$_POST['prenom'],
	'tel'=>$_POST['tel'],
	'email'=>$_POST['email'],
	'secu'=>$_POST['secu'],
	'mutuelle'=>$_POST['mutuelle'],
	'teletransmission'=>$_POST['teletransmission']
	));

$msg = 'Votre demande a bien été enregistrée';

header('Location: index.php?msg=' . $msg);
