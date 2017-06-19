<?php
include('connexion.php');

function recup_text($nom){
    $sql='SELECT content_text FROM page WHERE name_text="'.$nom.'"';
    $r = $db->query($sql);
    return $r;
}
function recup_name(){
    include ('connexion.php');
    $return = $db -> query('SELECT name_text FROM page');
    $option = "" ;
    foreach ($return as $name)
        $option .= "<option>" . $name . "</option>";
    return $option;
}