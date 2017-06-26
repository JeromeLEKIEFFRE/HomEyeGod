<?php
include('connexion.php');
include('../Modele/recup.php');

$selected_text = $_GET["text"];

$r = recup_text($db,$selected_text);

echo $r['content_text'];
