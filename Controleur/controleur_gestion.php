<?php
include ("../Modele/fonction_gestion_compte.php");
session_start();
if ($_POST["Mot_de_passe_actuel"]== infoU($db,$_SESSION[idUtilisateur])['Mdp']) {
    if ($_POST["Nom_utilisateur"] != Null) {
        if ($_POST[Nom_utilisateur]==nom_utilisateur($db,$_POST["Nom_utilisateur"])){
            $db->exec('UPDATE utilisateurs  SET NomUtilisateur= "'.$_POST ["Nom_utilisateur"].'" WHERE $_SESSION[idUtilisateur]');
        }
        else {
            echo "Ce nom d'utilisateur est déja utilisée";
        }
    }
    if ($_POST ["Mot_de_passe"] != Null && $_POST ["Mot_de_passe"] == $_POST ["confirmer"]) {
        $db->exec('UPDATE utilisateurs  SET Mdp= "' . $_POST ["Mot_de_passe"] . '" WHERE $_SESSION[idUtilisateur]');
    }
    if ($_POST["email"] != Null) {
        if ( idMail($db, $_POST["email"])->rowcount() ==NULL){
            $db->exec('UPDATE utilisateurs  SET Mail = "' . $_POST ["email"] . '" WHERE $_SESSION[idUtilisateur]');
        }
        else{
            echo"Cette adresse mail est deja utilisée";
        }
    }
    if ($_POST["mobile"] != Null) {
        $db->exec('UPDATE utilisateurs  SET Mobile = "' . $_POST ["mobile"] . '" WHERE $_SESSION[idUtilisateur]');
    }
    if ($_POST["fixe"] != Null) {
        $db->exec('UPDATE utilisateurs  SET numero = "' . $_POST ["fixe"] . '" WHERE $_SESSION[idUtilisateur]');
    }
    if ($_POST["code_postal"] != Null) {
        $db->exec('UPDATE maisons  SET code_postal = "' . $_POST ["code_postal"] . '" WHERE $_SESSION[idUtilisateur]');
    }
    if ($_POST["Ville"] != Null) {
        $db->exec('UPDATE maisons  SET Ville = "' . $_POST ["Ville"] . '" WHERE $_SESSION[idUtilisateur]');
    }
    if ($_POST["numero_voie"] != Null) {
        $db->exec('UPDATE maisons  SET numero_voie = "' . $_POST ["numero_voie"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["TypeValue"] != Null) {
        $db->exec('UPDATE maisons  SET TypeVoie = "' . $_POST ["TypeValue"] . '" WHERE $_SESSION[idUtilisateur]');
    }
    if ($_POST["Voie"] != Null) {
        $db->exec('UPDATE maisons  SET Voie = "' . $_POST ["Voie"] . '" WHERE $_SESSION[idUtilisateur]');
    }

    header(' ../Vue/Pages/gestioncompte.php');
}
else {
    echo "Le mot de passe que vous avez rentrer est incorrect";
}