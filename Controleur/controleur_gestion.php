<?php
include ("../Modele/fonction_gestion_compte.php");
if ($_POST["Mot_de_passe_actuel"]== infoU($db,1)['Mdp']) {
    if ($_POST["Nom_utilisateur"] != Null) {
        $db->exec('UPDATE utilisateurs  SET NomUtilisateur= "' . $_POST ["Nom_utilisateur"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST ["Mot_de_passe"] != Null && $_POST ["Mot_de_passe"] == $_POST ["confirmer"]) {
        $db->exec('UPDATE utilisateurs  SET Mdp= "' . $_POST ["Mot_de_passe"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["email"] != Null && idMail($db, $_POST["email"] == Null)) {
        $db->exec('UPDATE utilisateurs  SET Mail = "' . $_POST ["email"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["mobile"] != Null) {
        $db->exec('UPDATE utilisateurs  SET Mobile = "' . $_POST ["mobile"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["fixe"] != Null) {
        $db->exec('UPDATE utilisateurs  SET numero = "' . $_POST ["fixe"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["code_postal"] != Null) {
        $db->exec('UPDATE maisons  SET code_postal = "' . $_POST ["code_postal"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["Ville"] != Null) {
        $db->exec('UPDATE maisons  SET Ville = "' . $_POST ["Ville"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["numero_voie"] != Null) {
        $db->exec('UPDATE maisons  SET numero_voie = "' . $_POST ["numero_voie"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["TypeValue"] != Null) {
        $db->exec('UPDATE maisons  SET TypeVoie = "' . $_POST ["TypeValue"] . '" WHERE idUtilisateur = 1');
    }
    if ($_POST["Voie"] != Null) {
        $db->exec('UPDATE maisons  SET Voie = "' . $_POST ["Voie"] . '" WHERE idUtilisateur = 1');
    }
    header('Location: ../Vue/comfirmation_changement.php');
}