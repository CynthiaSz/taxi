<?php 

include 'header.php' ?>

<body class="fond">
	<header>
		<h1>Taxi Lerm</h1>
	</header>

  <div class="résa">
    <form action="add_course.php" method="get" class="résa1">
      <p class="date_course">Date: <input type="text" id="datepicker" name="date_course"></p>
      <select name="nb_personnes" class="select">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
      </select>
      <input class="dest" type="text" name="destination" placeholder="Destination">
      <input type=submit value="Valider">
    </form>
  </div>

  <nav>
    <!-- label associé à l'input -->

<?php if(isset($_SESSION['login'])) {
$req = $bdd->query('SELECT nom, prenom, tel FROM client');
$resultat = $req-> fetch();
$req = $bdd->prepare('INSERT INTO taxi (nom, prenom, tel) VALUES (:nom, :prenom, :tel)');
$req->execute(array(
  'nom'=>$resultat['nom'],
  'prenom'=>$resultat['prenom'],
  'tel'=>$resultat['tel']));
$resultat = $req-> fetch();
} ?>
<!-- si la personne est connectée, les nom et téléphone des clients sont envoyés dans la table taxi -->

<?php if(isset($_SESSION['login'])) {
$req = $bdd->query('SELECT nb_personnes FROM courses');
$resultat = $req-> fetch();
$req = $bdd->prepare('INSERT INTO taxi (nb_personnes) VALUES (:nb_personnes)');
$req->execute(array(
  'nb_personnes'=>$resultat['nb_personnes']));
$resultat = $req-> fetch();
} ?>
<!-- si la personne est connectée, le nombre de personnes est enregistré dans la table taxi -->

<?php
if(isset($_SESSION['login'])) {
?>
  <label><a href="logout.php" id="login">Déconnexion</a></label>
<?php
} else {
?>
  <label for=login>Login</label>
<?php
}
?>
<!-- si le client est connecté, cela transforme le bouton login en bouton déconnexion -->

  </nav>

  <div class="box">
    <!--bouton radio de base-->
    <input type=radio name=box id=none>
  
      <div class="box">
        <!-- bouton radio au clic -->
        <input type=radio name=box id=login>
        <!-- formulaire connexion -->
        <form action="login_post.php" method="post">
          <h3>Connexion</h3>
          <label for=none>X</label>
          <input placeholder="Identifiant" name="login">
          <input type=password placeholder="Mot de passe" name="password">
          <input type=submit value="Valider">
          <a href="register.php">Pas encore inscrit ?</a>
        </form>
      </div><!-- fin box -->
  </div>

<div class="qui">
    <h2>Qui sommes nous ?</h2>
    <p>Forts d'une expérience de 18 ans, nous sommes une compagnie de taxi familiale</br>Dans un esprit de convivialité et une envie de rendre service, nous sommes disponibles pour vous emmener que ce soit à vos rendez vous médicaux, en périscolaire, à l'aéroport, la gare...</br>Possédant 3 véhicules dont un de 7 places, nous serions heureux de vous compter parmi nos clients.</p>
  </div>

<?php include 'footer.php' ?>
