<?php
require ('connexion_db.php');

function getDonnee($db,$idCapteur){
    $sql = 'SELECT Datas FROM donnees WHERE idCapteur="'.$idCapteur.'"';
    $reponse = $db->query($sql);
    $reponsefetch = $reponse->fetchAll();
    return $reponsefetch;
}

function listsalles($db,$idMaison){
    $sql='SELECT * FROM pieces WHERE idMaison="'.$idMaison.'"';
    $reponse = $db->query($sql);
    $reponsefetch = $reponse->fetchAll();
    return $reponsefetch;
}

function listetypescapteurs($db,$idMaison){
    $sql='SELECT * FROM typecapteur JOIN capteurs ON typecapteur.TypeValue=capteurs.Type WHERE idMaison="'.$idMaison.'"';
    $reponse = $db->query($sql);
    $reponsefetch = $reponse->fetchAll();
    return $reponsefetch;
}
function capteurs($db,$idPiece){
    $sql='SELECT capteurs.idCapteur,typecapteur.TypeName,donnees.Datas FROM typecapteur JOIN capteurs ON typecapteur.TypeValue=capteurs.Type JOIN donnees ON capteurs.idCapteur=donnees.idCapteur WHERE capteurs.idPiece="'.$idPiece.'"';
    $reponse = $db->query($sql);
    $reponsefetch = $reponse->fetchAll();
    return $reponsefetch;
}
