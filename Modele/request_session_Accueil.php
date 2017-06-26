<?php
include ("../Modele/connexion_db.php");

function connexion_check_username($db, $username)
{
    $sql='SELECT idUtilisateur FROM utilisateurs WHERE NomUtilisateur="'.$username.'"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
function connexion_check_password($db, $NomUtilisateur)
{
    $sql='SELECT Mdp,idUtilisateur,Roles FROM utilisateurs WHERE NomUtilisateur="'.$NomUtilisateur.'"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}