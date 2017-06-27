<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style_new_accueil.css" />
    <title>HomiCare</title>
</head>

<body>
<div class="titre_page">
<p><img src="../Images/logo_HEG.png" alt="logo HomiCare" /></p>
</div>
<div class="titre_page">
    <h1>Bienvenue sur HomiCare</h1>
</div>


<section class="connexion_accueil" id="cadre_connexion">

    <form id="form_connexion" action="../../Controleur/formulaire_connexion_Accueil.php" onsubmit="return Afficher_erreur_connexion()" method="post">
        <label for="Nom d'utilisateur"> Nom d'utilisateur:</label><input type="text" name="username" /><br/>
        <label for="Mot de passe"> Mot de passe:</label><input type="password" name="password" /><br/>
        <label for="valider"></label><input type="submit" name="valider" />
        <p> pas encore de compte?<a href="../Vue/inscription.html"> inscrivez vous!</a></p>

    </form>
    <script type="text/javascript" src="../JS/Erreur_connexion.js"></script>
</section>

</body>
</html>

