<?php
include('connexion.php');
include('../Modele/recup.php');

$selected_text = $_GET["text"];
$content_text = $_GET["cont"];


submit_modif($db,$selected_text,$content_text);


