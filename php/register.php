<div class="contact">
    <h4>S'enregistrer</h4>
      <form action="register_post.php" method="post">
          <label class="champs" for="login">Identifiant<em>*</em></label>
          <input name="login" required=""><br>
          <label class="champs" for="password">Mot de passe<em>*</em></label>
          <input type="password" name="password">
      
        <p><i>Complétez le formulaire. Les champs marqués par </i><em>*</em> sont <em>obligatoires</em></p>
      
        <fieldset>
          <legend>Informations personnelles</legend>

          <label class="champs" for="civilite">Civilité<em>*</em></label>
          <input class="civi" type=radio name=civilite id=civilite>Mr
          <input class="civi" type=radio name=civilite id=civilite>Mme<br>
            <!-- //placeholder: indication grisée 
            //required: il faut renseigner le champs sinon la validation est bloquée
            //autofocus: le curseur est positionné dans cette case au chargement de la page -->
          <label class="champs" for="nom">Nom<em>*</em></label>
          <input name="nom" autofocus="" required=""><br>
          <label class="champs" for="prenom">Prénom<em>*</em></label>
          <input name="prenom" autofocus="" required=""><br>
         
          <label class="champs" for="telephone">Portable<em>*</em></label>
            <!-- // type="tel": bascule le clavier sur un smartphone
            // pattern: expression régulière à vérifier pour pouvoir valider -->
          <input id="telephone" name="tel" placeholder="06********" pattern="06[0-9]{8}"><br>
          <label class="champs" for="email">Email<em>*</em></label>
          <input id="email" name="email" type="email" required=""><br>
        </fieldset>
        <fieldset>
          <legend>Prise en charge</legend>
          <label class="champs" for="secu">Numéro sécurité sociale</label>
          <input id="secu" type="text" name="secu"><br>
          <label class="champs" for="teletransmission">Télétransmission mutuelle</label>
          <input name="teletransmission">
          <label class="champs" for="mutuelle">Numéro adhérent mutuelle</label>
          <input name="mutuelle">
        </fieldset>
        <input type="submit" value="Valider">
    </form>
	</div>

