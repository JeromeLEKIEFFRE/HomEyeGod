<?php
session_start();
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
<body>
<section>
    <form action="../../Controleur/formulaire_connexion_Accueil.php" method="post">
        <label for="Nom d'utilisateur"> Nom d'ulisisateur:</label><input type="text" name="Nom_utilisateur" /><br/>
        <label for="Mot de passe"> Mots de passe:</label><input type="password" name="Mot_de_passe" /><br/>
        <label for="valider"></label><input type="submit" name="valider" />
</section>