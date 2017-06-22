<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Créer un compte</title>
</head>

<body>
<header>
    <h1><a href="home_page.html"><img src="Images/logo_HEG.png" alt="logo GerHome" /></a></h1>
</header>

<nav>
    <ul id="navigation">
        <li><a href="home_page.html" alt="logo Home">Accueil <!--<img src="logo_accueil.png" alt="retour vers l'accueil"/></a></li>-->   <!-- ici mettre le logo accueil -->
        <li><a href="mon_compte.html">Mon Compte</a></li>
        <li><a href="ma_maison.html">Ma maison</a></li>
        <li><a href="boutique.html">Boutique</a></li>
        <li><a href="qui_sommes_nous.html">Qui sommes nous?</a></li>
        <li><a href="aide_contact.html">Aide/Contact</a></li>
    </ul>
</nav>
<h2>Créez votre compte HomEyeGod</h2>
<section class="section_inscription">
    <div><!-- on rentre les informations dans des cases -->
        <form id="form_inscription" action="Formulaire.php" method="post">
            <label for="Nom">Nom:</label><input type="text" name="Nom"/><br/>
            <label for="Prénom"> Prénom:</label><input type="text" name="Prénom"/><br/>
            <label for="Sexe"> Sexe:</label><input type="radio" name="Sexe" value="homme"/>homme
            <label for="Sexe"></label><input type="radio" name="Sexe" value="femme"/>femme<br/>
            <label for="Nom d'utilisateur"> Nom d'utilisateur:</label><input type="text" name="Nom d'utilisateur" /><br/>
            <label for="Mot de passe"> Mot de passe:</label><input type="password" name="Mot de passe" /><br/>
            <label for="Confirmer le mot de passe"> Confimer le mot de passe:</label><input type="password"  name="confirmer le mot de passe"/> <br/>
            <label for="Adresse"> Adresse:</label><input type="text" name="Adresse"/><br/>
            <label for="Code postal"> Code postal:</label><input type="int" range="5" name="Code postal"/><br/>
            <label for="Ville"> Ville:</label><input type="text" name="Ville"/><br/>
            <label for="email"> email:</label><input type="email" name="email"/><br/>
            <label for="Numéro de téléphone"> Numéro de téléphone:</label><input type="tel" name="Numéro de téléphone"/><br/>
            <label for="Numéro de téléphone fixe"> Numéro de téléphone fixe:</label><input type="tel" name="Numéro de téléphone fixe"/><br/>
            <label for="valider"></label><input type="submit" name="valider" id="boutton_submit"/>

        </form>



    </div>
</section>

<footer>

</footer>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: eliot
 * Date: 19/06/2017
 * Time: 10:17
 */