<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style_connexion_accueil.css" />
    <title>Créer un compte</title>
</head>

<body>
<header>

</header>
<h2>Créez votre compte HomiCare</h2>
<section class="section_inscription">
    <div><!-- on rentre les informations dans des cases -->
        <form id="form_inscription" action="../../Controleur/Formulaire_inscription.php" onsubmit="return Afficher_erreur_inscription()" method="POST">
            <label for="Nom">Nom:</label><input type="text" name="nom"/><br/>
            <label for="Prénom"> Prénom:</label><input type="text" name="prenom"/><br/>
            <label for="Sexe"> Sexe:</label><input type="radio" name="sexe" value="homme"/>homme
            <label for="Sexe"></label><input type="radio" name="sexe" value="femme"/>femme<br/>
            <label for="Nom d'utilisateur"> Nom d'utilisateur:</label><input type="text" name="username" /><br/>
            <label for="Mot de passe"> Mot de passe:</label><input type="password" name="mdp" /><br/>
            <label for="Confirmer le mot de passe"> Confimer le mot de passe:</label><input type="password"  name="confirm_mdp"/> <br/>
            <label for="Type de voie">Type de voie:</label>
            <SELECT name="type_voie" size="1">
                <OPTION>Rue</OPTION>
                <option>Avenue</option>
                <option>Boulevard</option>
                <option>Impasse</option>
                <option>Chemin</option>
                <option>Voie</option>
                <option>Quai</option>
                <option>Allé</option>
                <option>Berge</option>
                <option>Lieu dit</option>
                <option>Place</option>
            </SELECT><br/>
            <label for="Numéro de voie">Numéro de voie:</label><input type="int" name="numero_voie"/><br/>
            <label for="Voie">Voie:</label><input type="text" name="voie"/><br/>
            <label for="Code postal"> Code postal:</label><input type="int" name="code_postal"/><br/>
            <label for="Ville"> Ville:</label><input type="text" name="ville"/><br/>
            <label for="Pays"> Pays:</label><input type="text" name="pays"/><br/>
            <label for="email"> email:</label><input type="email" name="email"/><br/>
            <label for="Numéro de téléphone"> Numéro de téléphone:</label><input type="tel" name="numero_tel"/><br/>
            <label for="Numéro de téléphone fixe"> Numéro de téléphone fixe:</label><input type="tel" name="numero_tel_fixe"/><br/>

            <p>En cliquant sur "Envoyer", vous acceptez nos <a href="cgu.php"> conditions générales d'utilisation " </a> </p> <br/>

            <label for="valider"></label><input type="submit" name="valider" id="boutton_submit"/>

        </form>

        </div>

        <script type="text/javascript" src="../JS/controle_form_Accueil.js"></script>
</section>

</body>
</html>

