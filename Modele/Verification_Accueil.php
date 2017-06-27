<?php
require("connexion_db_1.php");


function idUtilisateur($db,$username){
//Renvoie l'ID de l'utilisateur ayant le nom d'utilisateur donné
//(Utilisable pour savoir si un nom d'utilisateur éxiste déjà)
    $sql = 'SELECT idUtilisateur FROM utilisateurs WHERE NomUtilisateur = "'.$username.'"';
    $reponse = $db->query($sql);
    return $reponse;
}


function idMail($db,$email){
//Renvoie l'ID de l'utilisateur ayant le mail donné
    $sql = 'SELECT idUtilisateur FROM utilisateurs WHERE Mail = "'.$email.'"';
    $reponse = $db->query($sql);
    return $reponse;
}


function idNum($db,$numero_tel){
//Renvoie l'ID de l'utilisateur ayant le numéro de téléphone donné
    $sql = 'SELECT idUtilisateur FROM utilisateurs WHERE Numero = "'.$userNum.'" OR Mobile = "'.$numero_tel.'"';
    $reponse = $db->query($sql);
    return $reponse;
}

function getMail($db,$idUtilisateur){
    // Renvoie l'E-mail du nouvel utilisateur
    $sql = 'SELECT Mail FROM utilisateurs WHERE idUtilisateur ="'.$idUtilisateur.'"';
    $reponse = $db->query($sql);
    return $reponse;
}

function test_connect($db,$user_name,$mdp){
    $r= $db->query('SELECT Mdp FROM utilisateurs WHERE NomUtilisateur = "'.$user_name.'"');
    if($mdp == $r['Mdp']){
        return true;
    }
    return false;
}

function get_name ($db,$username){
    $r= $db->query('SELECT Nom FROM utilisateurs WHERE idUtilisateur="'.$username.'"');
    return $r['Nom'];
}
function get_first_name ($db,$username){
    $r= $db->query('SELECT Prenom FROM utilisateurs WHERE idUtilisateur="'.$username.'"');
    return $r['Prenom'];
}
function verify($db)
{
    $sql='SELECT Nom FROM utilisateurs WHERE idUtilisateur=(SELECT MAX(idUtilisateur) FROM utilisateurs)';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}
function verifyHome($db)
{
    $sql='SELECT Voie FROM maisons WHERE idMaison=(SELECT MAX(idMaison) FROM maisons)';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
}

function typevoie($db,$type_voie)
{
    $sql='SELECT TypeValue FROM typevoie WHERE TypeName="'.$type_voie.'"';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf;
    $sql=$db->query('SELECT TypeValue FROM typevoie WHERE TypeName = "'.$type_voie.'"');
    return $sql['TypeValue'];
}

function idNewMaison($db)
{
    $sql='SELECT idMaison FROM maisons WHERE idMaison=(SELECT MAX(idMaison) FROM maisons)';
    $rep = $db->query($sql);
    $repf=$rep->fetch();
    return $repf['idMaison'];
}

?>