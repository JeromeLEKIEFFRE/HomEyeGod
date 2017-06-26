<?php
include ("../Modele/connexion_db.php");
include ("../Modele/request_session.php");


function session_connect ($role, $nom, $prenom, $idAdress, $mail, $username)
{
    session_start();
    $_SESSION['Roles'] = $role;
    $_SESSION['Nom'] = $nom;
    $_SESSION['Prenom'] = $prenom;
    $_SESSION['idAdressePrincipale'] = $idAdress;
    $_SESSION['Mail'] = $mail;
    $_SESSION['NomUtilisateur'] = $username;
}