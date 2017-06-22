<?php
include('connexion.php');
// CONSULTATION ADMIN
function recup_all_broken_capt($db){
    $sql='SELECT utilisateurs.NomUtilisateur,typecapteur.TypeName,pieces.Nom
          FROM utilisateurs JOIN capteurs ON utilisateurs.idUtilisateur = capteurs.idUtilisateur
                            JOIN typecapteur ON capteurs.idCapteur = typecapteur.TypeValue
                            JOIN pieces ON capteurs.idPièce = pieces.idPiece
          WHERE capteurs.Etat = 3' ;
    $option="";
    $r = $db->query($sql);
    foreach ($r as $row)
        $option.="<li>". $row["NomUtilisateur"]." ".$row["Nom"]." ".$row["TypeName"]."</li>";
    return $option;
}
function recup_name($db){
    $return = $db -> query('SELECT * FROM utilisateurs');
    $option = "" ;
    foreach ($return as $row)
        $option .= "<li>" . $row['NomUtilisateur'] . "</li>";
    return $option;
}
// MODIFICATION ADMIN
function recup_page_name($db){
    $option="<ul>";
    $t=$db->query('SELECT DISTINCT name_page FROM page');
    foreach ($t as $page) {
        $option .= "<li>" . $page['name_page'] . "</li> <ul>";
        $r = $db->query('SELECT name_text FROM page WHERE name_page = "' . $page['name_page'] . '"');
        foreach ($r as $name) {
            $option .= "<li onclick=''>" . $name['name_text'] . "</li>";
        }
        $option .= "</ul>";
    }
    $option .= "</ul>";
    return $option;
}
function recup_content($db,$text_choosen){
    $r=$db->query('SELECT content_text FROM page WHERE name_text ="'.$text_choosen.'"');
    return $r;
}

function submit_modif($db,$text_choosen){
    $db->exec('UPDATE page SET content_text WHERE name_text= "'.$text_choosen.'" ');
}
