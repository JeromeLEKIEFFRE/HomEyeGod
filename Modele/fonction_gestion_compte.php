<?php
include ("../Modele/connexion_db.php");
require("../Modele/connexion_db.php");
function idMail($db,$userMail){
//Renvoie l'ID de l'utilisateur ayant le mail donné
    $sql = 'SELECT idUtilisateur FROM utilisateurs WHERE Mail = "'.$userMail.'"';
    $reponse = $db->query($sql);
    return $reponse;}

function infoU($db,$ID){
    $sql = 'SELECT * FROM utilisateurs WHERE idUtilisateur = "'.$ID.'"';
    $reponse = $db->query($sql);
    $reponsef = $reponse -> fetch();
    return $reponsef;}

function infoM($db,$ID){
    $sql = 'SELECT * FROM maisons WHERE idUtilisateur = "'.$ID.'"';
    $reponse = $db->query($sql);
    $reponsef = $reponse -> fetch();
    return $reponsef;}

function infoV($db,$ID){
    $sql = 'SELECT TypeName FROM typevoie JOIN utilisateur ON typevoie.TypeValue=utilisateur.typevoie WHERE idUtilisateur="'.$ID.'"';
    $reponse = $db->query($sql);
    $reponsef = $reponse -> fetch();
    return $reponsef;}



?>