<?php
require("connexion_db_1.php");
/*$requ=$db->prepare('SELECT MAX (idUtilisateur) FROM utilisateurs');
$requ->execute();*/



function insertNewUser($db, $username, $mdp, $nom, $prenom, $idMaison, $numero_tel, $numero_tel_fixe, $email, $type_user){
    // Créer un nouvel utilisateur /!\ à faire après avoir crée la maison avec les input de la demande d'adresse qui sera celui de la maison 'principale'
    $sql ='INSERT INTO utilisateurs () VALUES (NULL, "'.$type_user.'","'.$nom.'","'.$prenom.'","'.$idMaison.'","'.$numero_tel_fixe.'","'.$numero_tel.'","'.$email.'","'.$username.'","'.$mdp.'")';
    $db->exec($sql);
}

function newIdUtilisateur($db){
    // On cherche à trouver le dernier idUtilisateur (vu que les id sont AI, on pourra ajouter +1 pour créer le nouvel idUtilisateur)
    $sql = 'SELECT MAX (idUtilisateur) FROM utilisateurs';
    $reponse = $db->query($sql);
    return $reponse+1;
}

function newHome($db,$idUtilisateur,$ville,$type_voie,$numero_voie,$voie,$pays,$codepostal,$superficie,$nombrepiece,$nombrepersonne){
    // Création d'une maison  et retourne l'idMaison correspondant
    $sql ='INSERT INTO maisons VALUES (NULL,"'.$idUtilisateur.'","'.$type_voie.'","'.$numero_voie.'","'.$voie.'","'.$codepostal.'","'.$ville.'","'.$pays.'","'.$superficie.'","'.$nombrepiece.'","'.$nombrepersonne.'")';
    $db->exec($sql);

}

function idHome($db,$idUtilisateur){
    // Recherche de l'idMaison en fonction de l'idUtilisateur
    $sql = 'SELECT idMaison FROM maisons WHERE idUtilisateur = "'.$idUtilisateur.'"';
    $reponse = $db->query($sql);
    return $reponse;
}
?>
