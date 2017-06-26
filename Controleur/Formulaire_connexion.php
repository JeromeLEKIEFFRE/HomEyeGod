<?php
include ("../Modele/Verification.php");
include("../Modele/connexion_db_1.php");
if (test_connect($db,$_POST['Nom_utilisateur'],$_POST['Mot_de_passe'])){
    include ("session.php");
    setcookie($_POST['Nom_utilisateur'],get_name ($db,$username)." ".get_first_name ($db,$username));
    header('Location: ../'); // redirection vers la page gestion_compte
}