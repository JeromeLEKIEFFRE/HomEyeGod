<?php
session_start();
$_SESSION['idUtilisateur']="";
$_SESSION['Roles']="";

?>
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
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
<section>
    <form action="../Controleur/formulaire_connexion.php" method="post">
        <label for="Nom d'utilisateur"> Nom d'ulisisateur:</label><input type="text" name="Nom_utilisateur" /><br/>
        <label for="Mot de passe"> Mots de passe:</label><input type="password" name="Mot_de_passe" /><br/>
        <label for="valider"></label><input type="submit" name="valider" />
</section>