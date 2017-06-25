<?php
include ('connexion.php');

$selected_text = $_GET["text"];


$r = $db->query('SELECT content_text FROM page WHERE name_text ="'.$selected_text.'"');
$rf=$r->fetch();


echo $rf['content_text'];
?>