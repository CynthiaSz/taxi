<?php
 include 'connect.php';

//prépare la requête à insérer dans la base de données
$req = $bdd->prepare('INSERT INTO client (login, password, nom, prenom, tel, email, secu, mutuelle, teletransmission) VALUES (:login, :password, :nom, :prenom, :tel, :email, :secu, :mutuelle, :teletransmission)');

$req->execute(array(
	'login'=>$_GET['login'],
	'password'=>sha1($_GET['password']),
	'nom'=>$_GET['nom'],
	'prenom'=>$_GET['prenom'],
	'tel'=>$_GET['tel'],
	'email'=>$_GET['email'],
	'secu'=>$_GET['secu'],
	'mutuelle'=>$_GET['mutuelle'],
	'teletransmission'=>$_GET['teletransmission']
	));


header('Location:account.php?nom='.$_GET['nom'].'&prenom='.$_GET['prenom'].'&tel='.$_GET['tel'].'&email='.$_GET['email'].'&secu='.$_GET['secu'].'&mutuelle='.$_GET['mutuelle'].'&teletransmission='.$_GET['teletransmission'].'');

