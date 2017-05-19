<?php
 include 'connect.php';
 
$pass_hache = sha1($_POST['password']); 
//crypte le password
$login = $_POST['login'];

//prépare la base de données
$req = $bdd->prepare('SELECT id FROM client WHERE login = :loginREQ AND password = :passwordREQ');

// execute l'envoi à la base de données
$req->execute(array(
    'loginREQ'   => $login,
    'passwordREQ'=> $pass_hache
));

$resultat = $req-> fetch();


// si le login ou le mot de passe est faux, un message apparait et l'utilisateur reste sur la page index.php
if (!$resultat) {
	echo 'sorry the login or the password is false';
	header('Location: index.php?msg=Login or password incorrect');
}else{
	session_start();
	$_SESSION['id'] = $resultat['id'];
	$_SESSION['login'] = $login;
	$_SESSION['authentified'] = true;
    header('Location: index.php');
}

?>