<?php 

include 'header.php' ?>

<?php
if(isset($_SESSION['id'])) {
$req = $bdd->prepare('SELECT nom, prenom, tel FROM client WHERE id=:id');
$req->execute(array(
	'id'=>$_SESSION['id']
	));
$resultat=$req->fetch();
?>


<p>Bonjour, <?php echo $resultat['prenom']?> <?php echo $resultat['nom'];?>. Votre numéro de téléphone est le 0<?php echo $resultat['tel']; ?></p>

<?php 
} else {
header('Location:register.php');
}
?>

<?php 
$req = $bdd->prepare('SELECT destination, nb_personnes, date_course FROM courses');
$req->execute(array(($_GET['destination']), ($_GET['nb_personnes']), ($_GET['date_course'])
)); ?>


<p>Vous avez demandé une course à destination de <?php echo $_GET['destination']; ?> pour <?php echo $_GET['nb_personnes']; ?> personne(s), le <?php echo $_GET['date_course']; ?></p>

<?php
include 'envoiMail.php';

// envoi du mail de demande de course
$req = $bdd->prepare('SELECT emailT FROM taxi LIMIT 1');
$req->execute();
$resultat=$req->fetch();
sendMail($resultat['emailT'],'Taxi Lerm', 'demande de course le' .$_GET['date_course'].' '.'à destination de'.$_GET['destination'].", pour".$_GET['nb_personnes']."personne(s). Contactez-nous en répondant à cet email.");
?>





