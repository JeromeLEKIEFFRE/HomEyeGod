<?php
include ("../Modele/connexion_db.php");

function session_connect
{
    session_start();
    $_SESSION['Roles'] = $role;
    $_SESSION['Nom'] = $nom;
    $_SESSION['Prenom'] = $prenom;
    $_SESSION['idAdressePrincipale'] = $idadress;
    $_SESSION['Mail'] = $mail;
    $_SESSION['NomUtilisateur'] = $username;
}