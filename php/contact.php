<!DOCTYPE html>
<html>
<head>
	<title>Taxi Lerm</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<nav>
    		<!-- labels trigger the associated input -->
    		<!-- <label for=signup>S'inscrire</label>
    		<label for=login>S'identifier</label> -->
    		<label for=return class="retour"><a href=index.php>Retour</a></label>
    	</nav>

<!-- <div class="boxes"> -->
  <!-- the no-box radio trigger -->
 <!--  <input type=radio name=box id=none>
  
  <div class="box"> -->
    <!-- the login radio trigger -->
   <!--  <input type=radio name=box id=login> -->
    <!-- the login form -->
  <!--   <form>
      <h3>S'identifier</h3>
      <label for=none>X</label>
      <input placeholder="Identifiant">
      <input type=password placeholder="Mot de passe">
      <input type=submit name="Valider">
    </form>
  </div>
  <div class="box"> -->
    <!-- the signup radio trigger -->
   <!--  <input type=radio name=box id=signup> -->
    <!-- the signup form -->
<!--     <form>
      <h3>S'inscrire</h3>
      <label for=none>X</label>
      <input type=email placeholder="E-mail...">
      <input placeholder="Identifiant">
      <input type=password placeholder="Mot de passe">
      <input type=password placeholder="Confirmer mot de passe">
      <input type=submit name="Valider">
    </form>
  </div>
</div> -->
	</header>
		<!-- <h4 class="reserver">Réserver un taxi</h4> -->
		<h4 class="contact">Nous contacter</h4>
		<form action="#">
  			<p><i>Complétez le formulaire. Les champs marqués par </i><em>*</em> sont <em>obligatoires</em></p>
  			<fieldset>
    			<legend>Informations personnelles</legend>
    			<label class="champs" for="civilite">Civilité</label>
      			<select id="civilite">
        			<option value="Mr" name="Mr">Mr</option>
        			<option value="Mme" name="Mme">Mme</option>
      			</select><br>
      			<label class="champs" for="nom">Nom <em>*</em></label>
      			<!-- //placeholder: indication grisée 
      			//required: il faut renseigner le champs sinon la validation est bloquée
      			//autofocus: le curseur est positionné dans cette case au chargement de la page -->
      			<input id="nom" placeholder="" autofocus="" required=""><br>
      			<label class="champs" for="prenom">Prénom <em>*</em></label>
      			<input id="nom" placeholder="" autofocus="" required=""><br>
      			<label class="champs" for="telephone">Portable</label>
      			<!-- // type="tel": bascule le clavier sur un smartphone
      			// pattern: expression régulière à vérifier pour pouvoir valider -->
      			<input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
      			<label class="champs" for="email">Email <em>*</em></label>
      			<input id="email" type="email" placeholder="prenom.nom@boite.fr" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@boite.fr"><br>
  			</fieldset>
  			<fieldset>
    			<legend>Contact</legend>
      			<label class="champs" for="message">Message</label>
      			<textarea id="comments"></textarea>
  			</fieldset>
  			<input type="submit" value="Valider">
		</form>
	
	<footer>
		<p>Copyright Mady sign.fr</p>
	</footer>
</body>
</html>
