<?php
require("connexion_db.php");

function insertNewUser($db,$username,$mdp,$nom,$prenom,$idMaison,$numero,$mobile)
{
    // Créer un nouvel utilisateur /!\ à faire après avoir crée la maison avec les input de la demande d'adresse qui sera celui de la maison 'principale'
    $sql=$db->prepare('INSERT INTO `utilisateurs` (`idUtilisateur`, `Rôles`, `Nom`, `Prénom`, `idAdressePrincipale`, `Numero`, `Mobile`, `Mail`, `NomUtilisateur`, `Mdp`)
        VALUES (NULL,1,"'.$nom.'","'.$prenom.'","'.$idMaison.'","'.$numero.'","'.$mobile.'", "'.$username.'", "'.password_hash("$mdp",PASSWORD_BCRYPT).'")');
    $sql->execute();
}
$requ=$db->prepare('INSERT INTO `utilisateurs` (`idUtilisateur`, `Rôles`, `Nom`, `Prénom`, `idAdressePrincipale`, `Numero`, `Mobile`, `Mail`, `NomUtilisateur`, `Mdp`)
        VALUES (NULL,1,"'.$nom.'","'.$prenom.'","'.$idMaison.'","'.$numero.'","'.$mobile.'", "'.$username.'", "'.password_hash("$password",PASSWORD_BCRYPT).'")');
function add_user($db,$login,$password){
    //ajout user crypté
    $requ=$db->prepare('INSERT INTO Utilisateur (NomUtilisateur,Mdp) VALUES ("'.$login.'","'.password_hash("$password",PASSWORD_BCRYPT).'")');
    $requ->execute();
}


function newIdUtilisateur($db){
    // On cherche à trouver le dernier idUtilisateur (vu que les id sont AI, on pourra ajouter +1 pour créer le nouvel idUtilisateur)
    $sql = 'SELECT MAX (idUtilisateur) FROM utilisateurs';
    $reponse = $db->query($sql);
    return $reponse+1;
}

function newHome($db,$idUtilisateur,$ville,$typevoie,$num,$nomvoie,$pays,$codepostal){
    // Création d'une maison  et retourne l'idMaison correspondant  HOME SWEET HOME
    $sql ='INSERT INTO adresse VALUES ("'.$idUtilisateur.'","'.$ville.'","'.$typevoie.'","'.$num.'","'.$nomvoie.'","'.$pays.'","'.$codepostal.'")';
    $db->exec($sql);

}

function idHome($db,$idUtilisateur){
    // Recherche de l'idMaison en fonction de l'idUtilisateur
    $sql = 'SELECT idMaison FROM maisons WHERE idUtilisateur = "'.$idUtilisateur.'"';
    $reponse = $db->query($sql);
    return $reponse;
}
?>