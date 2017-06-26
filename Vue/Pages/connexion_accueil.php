<?php
session_start();
$_SESSION['idUtilisateur']="";
$_SESSION['Roles']="";

?>
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/style_connexion_accueil.css" />
        <title>Créer un compte</title>
</head>

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
<body>
<header>
    <h1><a href="home_page.html"><img src="logo-accueil.png" height="15%" width="15%" alt="logo HomEyeGod" /></a></h1>
</header>

<section>
    <form action="../../Controleur/formulaire_connexion_Accueil.php" method="post">
        <label for="Nom d'utilisateur"> Nom d'ulisisateur:</label><input type="text" name="Nom_utilisateur" /><br/>
        <label for="Mot de passe"> Mots de passe:</label><input type="password" name="Mot_de_passe" /><br/>
        <label for="valider"></label><input type="submit" name="valider" />
</section>