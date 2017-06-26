<?php
require("connexion_db.php");

function insertNewUser($db,$username,$mdp,$nom,$prenom,$numero_tel,$numero_tel_fixe,$email)
{
    // Créer un nouvel utilisateur /!\ à faire après avoir crée la maison avec les input de la demande d'adresse qui sera celui de la maison 'principale'
    $sql=$db->prepare('INSERT INTO utilisateurs 
    VALUES (NULL, 1, "'.$nom.'", "'.$prenom.'","'.$sexe.'",1, "'.$numero_tel.'", "'.$numero_tel_fixe.'", "'.$email.'", "'.$username.'", "'.$mdp.'")');
    $sql->execute();
}



function newIdUtilisateur($db){
    // On cherche à trouver le dernier idUtilisateur (vu que les id sont AI, on pourra ajouter +1 pour créer le nouvel idUtilisateur)
    $sql = 'SELECT MAX (idUtilisateur) FROM utilisateurs';
    $reponse = $db->query($sql);
    return $reponse+1;
}

function newHome($db,$idUtilisateur,$ville,$typevoie,$num,$nomvoie,$pays,$codepostal){
    // Création d'une maison  et retourne l'idMaison correspondant  HOME SWEET HOME
    $sql =$db->prepare('INSERT INTO adresse VALUES ("'.$idUtilisateur.'","'.$ville.'","'.$typevoie.'","'.$num.'","'.$nomvoie.'","'.$pays.'","'.$codepostal.'")');
    $db->exec($sql);

}

function idHome($db,$idUtilisateur){
    // Recherche de l'idMaison en fonction de l'idUtilisateur
    $sql = 'SELECT idMaison FROM maisons WHERE idUtilisateur = "'.$idUtilisateur.'"';
    $reponse = $db->query($sql);
    return $reponse;
}
function verify($db)
{
    $sql='SELECT Nom FROM utilisateurs WHERE idUtilisateur=(SELECT MAX(idUtilisateur) FROM utilisateurs)';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
?>