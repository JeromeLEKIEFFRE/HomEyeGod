<?php
include ("../Modele/connexion_db.php");

function connexion_check_username($db, $username)
{
    $sql='SELECT idUtilisateur FROM utilisateurs WHERE NomUtilisateur="'.$username.'"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
function connexion_check_password($db, $password, $idUtilisateur)
{
    $sql='SELECT idUtilisateur FROM utilisateurs WHERE idUtiliateur="'.$idUtilisateur.'"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
function password_verify{}