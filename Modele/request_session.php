<?php
include ("../Modele/connexion_db.php");

function connexion_check_username($db, $username)
{
    $sql='SELECT idUtilisateur FROM utilisateurs WHERE NomUtilisateur="'.$username.'"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
function connexion_check_password($db, $username)
{
    $sql='SELECT Mdp FROM utilisateurs WHERE idUtiliateur = "onnexion_check_username($db, $username)"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
$crypted_pwd=connexion_check_password($db, $username);
function password_verif$db, $username, $password)
{
    if (password_verify('$password','$crypted_pwd'))
}