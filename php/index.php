<!DOCTYPE html>
<html>
<head>
	<title>Taxi Lerm</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
	<nav>
    	<!-- labels trigger the associated input -->
    	<label><a href="contact.php">Nous contacter</a></label>
    	<label for=signup>Réserver</label>
    	<!-- <label for=login>S'identifier</label> -->
	</nav>

<div class="boxes">
  <!-- the no-box radio trigger -->
  <input type=radio name=box id=none>
  
  <!-- <div class="box"> -->
    <!-- the login radio trigger -->
    <!-- <input type=radio name=box id=login> -->
    <!-- the login form -->
    <!-- <form> -->
     <!--  <h3>Réserver</h3>
      <label for=none>X</label>
      <input placeholder="Login...">
      <input type=password placeholder="Password...">
      <input type=submit>
    </form>
  </div> -->
  <div class="box">
    <!-- the signup radio trigger -->
    <input type=radio name=box id=signup>
    <!-- the signup form -->
    <form>
      <h3>Réserver</h3>
      <label for=none>X</label>
      <input type=email placeholder="E-mail...">
      <input placeholder="Identifiant">
      <input type=password placeholder="Mot de passe">
      <input type="text" placeholder="Type de course (médical, périscolaire, course)">
      <input type=submit name="Valider">
    </form>
  </div>
</div>

<body class="fond">
	<header>
		<h1>Taxi Lerm</h1>
	</header>

	<h2>Qui sommes nous ?</h2>
	<p>Nous sommes une équipe à votre écoute.</br>Dans un esprit de convivialité et une envie de rendre service, nous sommes disponibles...</br>Nous serions heureux de vous compter parmi nos clients.</p>
	
	<footer>
		<p>Copyright Mady sign.fr</p>
	</footer>
</body>
</html>
