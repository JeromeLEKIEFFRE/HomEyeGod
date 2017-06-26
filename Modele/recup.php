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
    $return = $db -> query('SELECT * FROM utilisateurs JOIN roles ON utilisateurs.Roles = roles.RoleValue ORDER BY NomUtilisateur ASC ');
    $option = "<div class='nom_user'> <p>Nom d'utilisateur</p>" ;
    $option2 = "<div class='role_user'> <p>Rôle</p> " ;

    foreach ($return as $row) {
        $option .= $row['NomUtilisateur'] . "<br/>";
        $option2 .= $row['RoleName'] . "<br/>";
    }
    $option.="</div>";
    $option2.="</div>";
    return array($option,$option2);
}
// MODIFICATION ADMIN
function recup_page_name($db){
    // Page

    $option="<ul>";
    $t=$db->query('SELECT DISTINCT name_page FROM page');
    foreach ($t as $page) {
        $option .= "<li>" . $page['name_page'] . "</li> <ul>";

        // Texte que l'on peut modifier dans chaque page

        $r = $db->query('SELECT name_text,content_text FROM page WHERE name_page = "' . $page['name_page'] . '"');
        foreach ($r as $name) {
            $option .= "<li id= ".$name['name_text']." onclick='fill_text_area(". $name['name_text'] .")'>" . $name['name_text'] . "</li>";
        }
        $option .= "</ul>";
    }
    $option .= "</ul>";
    return $option;
}
function recup_page($db){
    $t=$db->query('SELECT DISTINCT name_page FROM page');
    return $t;
}
function recup_sous_page($db,$page){
    $r = $db->query('SELECT name_text,content_text FROM page WHERE name_page = "' . $page . '"');
    return $r;
}

function submit_modif($db,$selected_text,$content_text){
    $p_req = $db->prepare('UPDATE page SET content_text=:c_text WHERE name_text=:n_text');
    if ( $p_req->execute( array(':c_text' => $content_text, ':n_text' => $selected_text) ) === FALSE ) {
        echo "SQL Failed.";
    }
    // $exploit = \"; CREATE TABLE gmail(ID INT NOT NULL);
    // 'UPDATE page SET content_text="" WHERE name_text= "' . $exploit . '";'
    // 'UPDATE page SET content_text="" WHERE name_text= "\"; CREATE TABLE gmail(ID INT NOT NULL);";'
}

function recup_text($db,$selected_text){
    $r = $db->query('SELECT content_text FROM page WHERE name_text ="'.$selected_text.'"');
    $rf=$r->fetch();
    return $rf;
}
