<?php 

include 'header.php' ?>

<body class="fond">
	<header>
		<h1>Taxi Lerm</h1>
	</header>

  <div class="résa">
    <form action="add_course.php" method="post">
      <p>Date: <input type="text" id="datepicker" name="date_course"></p>
      <input type="text" name="nb_personnes" placeholder="Nombre de personnes">
      <input type="text" name="destination" placeholder="Destination">
      <label class="valider" for=login>Valider</label>
    </form>
  </div>

  <nav>
    <!-- label associé à l'input -->

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
