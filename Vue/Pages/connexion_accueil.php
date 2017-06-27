<?php
session_start();
$_SESSION['NomUtilisateur']="";
$_SESSION['idUtilisateur']="";
$_SESSION['Roles']="";

?>
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

    <?php
    $dbname = 'homeyegod';
    $host='localhost';
    $user='root';
    $password='root';
    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$password");
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
</div>

<section>
    <form id="form_connexion" action="../../Controleur/formulaire_connexion_Accueil.php" onsubmit="return Afficher_erreur_connexion()" method="post">
        <label for="Nom d'utilisateur"> Nom d'ulisisateur:</label><input type="text" name="Nom_utilisateur" /><br/>
        <label for="Mot de passe"> Mots de passe:</label><input type="password" name="Mot_de_passe" /><br/>
        <label for="valider"></label><input type="submit" name="valider" /><br/>
        <p> Pas encore de compte?<a href="inscription_accueil.php"> inscrivez vous!</a></p>

    </form>

</section>
</body>
</html>
